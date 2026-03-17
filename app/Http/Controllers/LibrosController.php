<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Libro;

class LibrosController extends Controller
{
    public function index()
    {
        // Trae todos los libros con su categoría asociada
        $libros = Libro::with('categoria')->get();

        return view('home.index', compact('libros'));
    }

    public function create()
    {
        $categorias = Categoria::all();
        return view('libros.create', compact('categorias'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'isbn' => 'required|string|max:100',
            'autor' => 'required|string|max:255',
            'editorial' => 'required|string|max:255',
            'categoria' => 'required|exists:categorias,id',
        ]);
        Libro::create([
            'nombre' => $request->nombre,
            'isbn' => $request->isbn,
            'autor' => $request->autor,
            'editorial' => $request->editorial,
            'categoria_id' => $request->categoria,
        ]);

        return redirect()->route('home')->with('success', 'Libro agregado exitosamente.');
    }
   public function edit($id)
    {
    $libro = Libro::findOrFail($id);
    $categorias = Categoria::all();
    return view('libros.edit', compact('libro', 'categorias'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'isbn' => 'required|string|max:100',
            'autor' => 'required|string|max:255',
            'editorial' => 'required|string|max:255',
            'categoria' => 'required|exists:categorias,id',
        ]);
        $libro = Libro::findOrFail($id);
        $libro->nombre = $request->nombre;
        $libro->isbn = $request->isbn;
        $libro->autor = $request->autor;
        $libro->editorial = $request->editorial;
        $libro->categoria_id = $request->categoria;
        $libro->save();

        return redirect()->route('home')->with('success', 'Libro actualizado exitosamente.');
    }
    public function destroy($id)
    {
        $libro = Libro::findOrFail($id);
        $libro->delete();

        return redirect()->route('home')->with('success', 'Libro eliminado exitosamente.');
    }
}
