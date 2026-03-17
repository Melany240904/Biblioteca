<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('auth.login'); 
        // Esto busca resources/views/auth/login.blade.php
    }

    public function register()
    {
        //validar los datos del registro
        $validatedData = request()->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required|string|min:8',
        ]);

        //crear el usuario
    $user = \App\Models\User::create([
        'name' => $validatedData['name'],
        'email' => $validatedData['email'],
        'password' => bcrypt($validatedData['password']),
        'username' => $validatedData['email'], // Asignar el email como username
        'user_type' => 'user', // Asignar un tipo de usuario por defecto (puedes cambiarlo según tus necesidades)
]);
    

        // redirigir o iniciar sesion automaticamente
        auth()->login($user);
        return redirect()->route('home');
    
}

    public function login()
    {
         #validar datos de inicion de sesión
        $credentials =request()->validate([
            'email' =>'required|string|email',
            'password' => 'required|string',
        ]);
        #intentar iniciar sesion
        if(auth()->attempt($credentials)){
            return redirect()->route ('home');
        }
        return back()-> withErrors([
            'emails' => 'Las credenciales no son correctas.',
        ]);
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}