<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoriaController;

use App\Http\Controllers\JuegoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
Route::get('/', function () {
    return view('index');
});
*/
Route::get('/login', function () {
    return view('login');
});



Route::get('/',[
    JuegoController::class,'index'
])->name('index');


###### juegos
Route::get('/admin/juegos', [
    JuegoController::class, 'admin'
])->name('admin.juegos');

Route::get('/admin/juegos/agregar', [
    JuegoController::class, 'create'
])->name('admin.agre-juego');

#comentario de prueba



Route::post('/admin/juegos', [
    JuegoController::class, 'store'
])->name('admin.store-juego');

Route::get('/admin/edit-juego/{id}', [JuegoController::class, 'edit'])->name('admin.edit-juego');

Route::put('/admin/juegos/{id}', [JuegoController::class, 'update'])->name('admin.update-juego');

Route::get('/admin/agre-juego', [
    JuegoController::class, 'agre'
])->name('admin.agre-juego');
    


####### categorias
Route::get('/admin/categorias', [
    CategoriaController::class, 'admin'
    ])->name('admin.categoria');
 
Route::get('/admin/edit-categorias', [
    JuegoController::class, 'edit'
    ])->name('admin.edit-categoria');
    
Route::get('/admin/agre-categorias', [
    JuegoController::class, 'agre'
    ])->name('admin.agre-categoria'); 