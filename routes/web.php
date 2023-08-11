<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\PaginationController;
use App\Http\Controllers\productosController;
use App\Http\Controllers\usuariosController;
use App\Http\Controllers\BackupController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware'=>'guest'],function(){
    Route::get('/',[AuthController::class,'land'])->name('land');
    Route::get('/login',[AuthController::class,'login'])->name('login');
    Route::get('/register',[AuthController::class,'register'])->name('register');
    Route::get('/forget-password',[AuthController::class,'forgetPassword'])->name('forget_password');
    Route::post('/authenticate',[AuthController::class,'authenticate'])->name('authenticate');
    Route::post('/signup',[AuthController::class,'signup'])->name('signup');
});

Route::post('/logout',[AuthController::class,'logout'])->name('logout')->middleware('auth');
Route::get('/lang/{lang}',[ LanguageController::class,'switchLang'])->name('switch_lang');
Route::get('/pagination-per-page/{per_page}',[ PaginationController::class,'set_pagination_per_page'])->name('pagination_per_page');

// Route::get('datatable', [DataTableController::class, 'index']);
Route::post('/addProducto',[ProductoController::class,'addProducto'])->name('addProducto');


Route::get('/obtener-productos',[productosController::class,'obtenerProductos']);
Route::post('/Eliminar-Productos',[ProductoController::class,'delete']);
Route::get('/obtener-usuarios',[usuariosController::class,'obtenerUsuarios']);
// Route::get('/backup-database/{backupName}',[BackupController::class,'backupDatabase']);
Route::get('/backup-database/{backupName}', [BackupController::class,'backupDatabase'])->name('backup.database');
// Route::get('/backup-database/{backupName}', 'BackupController@backupDatabase')->name('backup.database');




