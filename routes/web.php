<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\JuegoController;

Route::get('/login', function () {
    return view('login');
});

Route::get('/', [JuegoController::class, 'index'])->name('index');

// Rutas de juegos
Route::get('/admin/juegos', [JuegoController::class, 'admin'])->name('admin.juegos');
Route::get('/admin/juegos/agregar', [JuegoController::class, 'create'])->name('formulario.agregar.juego');
Route::get('/admin/edit-juego/{id}', [JuegoController::class, 'edit'])->name('admin.edit-juego');
Route::put('/admin/juegos/{id}', [JuegoController::class, 'update'])->name('admin.update-juego');
Route::delete('/admin/juego/{id}/elim', [JuegoController::class, 'destroy'])->name('admin.destroy.juego'); 
Route::post('/admin/juegos/agregar', [JuegoController::class, 'agre'])->name('admin.agre-juego');

// Rutas de categorías
Route::get('/admin/categorias', [CategoriaController::class, 'admin'])->name('admin.categoria');
Route::get('/admin/edit-categoria/{id}', [CategoriaController::class, 'edit'])->name('admin.edit-categoria');
Route::put('/admin/categorias/{id}', [CategoriaController::class, 'update'])->name('admin.update-categoria');
Route::delete('/admin/categorias/{id}/elim', [CategoriaController::class, 'destroy'])->name('admin.destroy.categoria');
Route::post('/admin/categorias/agregar', [CategoriaController::class, 'agre'])->name('admin.agre-categoria');
Route::get('/admin/categorias/agregar', [JuegoController::class, 'create'])->name('formulario.agregar.categoria');

