<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Cursos\CursosIndex;
use App\Http\Livewire\Cursos\CursosCreate;
use App\Http\Livewire\Cursos\CursosDelete;
use App\Http\Livewire\Cursos\CursosEdit;
use App\Http\Livewire\Cursos\CursosMostrar;

use App\Http\Livewire\Usuarios\UsuariosIndex;
use App\Http\Livewire\Usuarios\UsuariosCreate;
use App\Http\Livewire\Usuarios\UsuariosDelete;
use App\Http\Livewire\Usuarios\UsuariosEdit;
use App\Http\Livewire\Usuarios\UsuariosMostrar;

use App\Http\Livewire\Ventas\VentasIndex;
use App\Http\Livewire\Ventas\VentasCrear;



use App\Http\Livewire\Login\Login;




Route::get('/login', Login::class)->name('login');

  Route::group(['middleware' => 'auth'], function()
{
    Route::get('/maquinaria', CursosIndex::class)->name('cursos.index');
    Route::get('/maquinaria/create', CursosCreate::class)->name('cursos.create');
    Route::get('/maquinaria/{curso}/mostrar', CursosMostrar::class)->name('cursos.mostrar');
    Route::get('/maquinaria/{curso}/edit', CursosEdit::class)->name('cursos.edit');
    Route::get('/maquinaria/{curso}/delete', CursosDelete::class)->name('cursos.delete');

    Route::get('/clientes', UsuariosIndex::class)->name('usuarios.index');
    Route::get('/clientes/create', UsuariosCreate::class)->name('usuarios.create');
    Route::get('/clientes/{usuario}/mostrar', UsuariosMostrar::class)->name('usuarios.mostrar');
    Route::get('/clientes/{usuario}/edit', UsuariosEdit::class)->name('usuarios.edit');
    Route::get('/clientes/{usuario}/delete', UsuariosDelete::class)->name('usuarios.delete');

    Route::get('/ventas',VentasIndex::class)->name('ventas.index');
    Route::get('/ventas/create',VentasCrear::class)->name('ventas.create');
});




