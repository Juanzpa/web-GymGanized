<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\guiaController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\addpetController;
use App\Http\Controllers\configController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\enfermoController;
use App\Http\Controllers\funcionController;
use App\Http\Controllers\welcomecontroller;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\cuidadosController;
use App\Http\Controllers\mascotasController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\adaptarseController;
use App\Http\Controllers\downloadController;
use App\Http\Controllers\nosotrosControlador;
use App\Http\Controllers\vacunacionController;

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

Route::get('/principal', function () {
    return view('principal');
});

/******************************************************************************************/
Route::get('/nosotros', [nosotrosControlador::class, 'nosotros'])->name('nosotros');

Route::get('/download', [downloadController::class, 'download'])->name('download');

Route::get('/home', [homeController::class, 'home'])->name('home');

Route::get('/guia', [guiaController::class, 'guia'])->name('guia');

Route::get('/muro', [PostController::class,'index'])->name('posts.index');

Route::get('/config', [configController::class,'userconfig'])->name('config_user');

Route::post('/config', [configController::class,'actualizar'])->name('actualizar');

Route::get('/funcion', [funcionController::class, 'funcion'])->name('funcion');

Route::get('/pets', [mascotasController::class, 'mascotas'])->name('mascotas');

Route::get('/cuidados', [cuidadosController::class, 'cuidados'])->name('cuidados');

Route::get('/enfermo', [enfermoController::class, 'enfermo'])->name('enfermo');

Route::get('/vacunacion', [vacunacionController::class, 'vacunacion'])->name('vacunacion');

Route::get('/adaptarse', [adaptarseController::class, 'adaptarse'])->name('adaptarse');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/login', [LoginController::class,'store']);


/******************************************************************************************/

//----------------------------------------------------------------------------------------//



//----------------------------------------------------------------------------------------//

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/login', [LoginController::class,'store']);


Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

//----------------------------------------------------------------------------------------//

Route::get('/', [welcomecontroller::class, 'index'])->name('welcome');

//----------------------------------------------------------------------------------------//

Route::get('/muro', [PostController::class,'index'])->name('posts.index');

//----------------------------------------------------------------------------------------//

Route::get('/addpet', [addpetController::class, 'index'])->name('addpet');
Route::post('/addpet', [addpetController::class, 'store'])->name('addpet.store');

//----------------------------------------------------------------------------------------//

Route::get('/config', [configController::class,'userconfig'])->name('config_user');
Route::post('/config', [configController::class,'actualizar'])->name('actualizar');

//----------------------------------------------------------------------------------------//

/*Route::get('/pets', [mascotasController::class, 'mascotas'])->name('mascotas');*/

//----------------------------------------------------------------------------------------//

Route::get('/guia', [guiaController::class, 'guia'])->name('guia');

Route::get('/funcion', [funcionController::class, 'funcion'])->name('funcion');



//----------------------------------------------------------------------------------------//

Route::get('/contacto', [ContactoController::class, 'mostrarFormulario'])->name('contacto.mostrar');
Route::post('/contacto', [ContactoController::class, 'enviarCorreo'])->name('contacto.enviar');

