# Copilot instructions for this Laravel project

This repository is a Laravel 12 skeleton app customized as "biblioteca". The goal of these instructions is to help AI coding agents be immediately productive by surfacing the project's structure, conventions, and common developer workflows.

1. Project overview
- Base framework: Laravel (see `composer.json`). Primary runtime is PHP 8.2.
- Key areas: `app/` (controllers, models), `routes/` (HTTP routes), `resources/views/` (Blade templates), `database/` (migrations & seeders).
- Tests use Pest/PHPUnit; `phpunit.xml` config runs tests with an in-memory sqlite DB in CI (`DB_CONNECTION=sqlite`, `DB_DATABASE=:memory:`).

2. Developer workflows (how to run/build/test)
- Quick setup (dev machine):
  - `composer install`
  - copy `.env.example` → `.env` and run `php artisan key:generate`
  - `php artisan migrate` (or `composer run setup` script which runs setup steps defined in `composer.json`).
- Frontend/dev server: `npm install` then `npm run dev` or use `composer run dev` which runs `php artisan serve`, `queue:listen`, and `npm run dev` (via `npx concurrently`).
- Tests: run `composer test` or `php artisan test` (Pest is installed: `vendor/bin/pest`). Note phpunit.xml uses sqlite memory for fast tests.

3. Project-specific conventions and gotchas
- PSR-4 autoloading: `App\\` => `app/` (see `composer.json`). Edit classes under `app/`.
- Views: controllers return Blade views stored in `resources/views`. Example: `AuthController::loginForm()` returns `auth.login` → file at `resources/views/auth/login.blade.php`.
- Routes live in `routes/web.php`. Use controller class references (e.g. `[AuthController::class, 'login']`). Watch for namespace case-sensitivity: `App\\Http\\Controllers` is the canonical namespace — `App\\http\\Controllers` (lowercase) may work on Windows but will break on Linux/CI. Fix capitalization when modifying `routes/web.php`.
- Validation and creation patterns: codebase uses `request()->validate([...])` and `\App\Models\User::create([...])` with `bcrypt()` for passwords; follow the same approach for new auth code.
- Database: migrations exist in `database/migrations/`. Tests rely on sqlite in-memory; avoid hardcoding file-based DB paths in tests.

4. Integration points & external deps
- Packages (see `composer.json`): `laravel/boost`, `pestphp/pest`, `laravel/pint`, `laravel/sail` — some dev tools are expected to be present in CI.
- Frontend tooling: `vite` and `npm` scripts configured in `package.json` and `vite.config.js` — edit `resources/js` and `resources/css` for frontend work.
- Queues and mail: in tests these are set to `sync` and `array` respectively (see `phpunit.xml`). When changing queue or mail behavior, update test environment variables accordingly.

5. Files to inspect when making changes
- Routes: `routes/web.php`
- Controllers: `app/Http/Controllers/*` (e.g. `AuthController.php`)
- Models: `app/Models/*` (e.g. `User.php`)
- Views: `resources/views/*` (e.g. `resources/views/auth/login.blade.php`)
- Migrations: `database/migrations/*` and seeds in `database/seeders`.
- Tests: `tests/Feature` and `tests/Unit`.

6. Examples and actionable patterns
- Add a simple GET route that returns a view:

  ```php
  Route::get('/hello', fn() => view('welcome'));
  ```

- Controller method pattern (follow `AuthController`):

  - Validate with `request()->validate([...])`
  - Use model `create()` for simple inserts
  - Use `auth()->login($user)` and `return redirect()->route('home')` for post-auth flows

7. When editing code the agent should check
- `routes/web.php` for duplicate or conflicting routes (there are duplicates for `/login`).
- Namespaces and class imports for correct casing (`App\\Http\\Controllers`).
- `composer.json` scripts for helpful shortcuts (`setup`, `dev`, `test`).

8. Where to look for AI/agent policies
- There are no repository-level agent docs; vendor packages reference `AGENTS.md`/`CLAUDE.md` (e.g. `vendor/laravel/boost`) but these are templates. Prefer editing this file for project-specific guidance.

If any section is unclear or you'd like me to include more concrete examples (links to exact files or expanded troubleshooting steps), tell me which area to expand. I'll update this file accordingly.
