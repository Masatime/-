<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', [PostController::class, 'open']);

Route::get('/cross-open/cross-open', [PostController::class, 'open']);

Route::get('/crosstec/cross-company-technology-information', [PostController::class, 'power']);

Route::get('/crossinformation/cross-information-first', [PostController::class, 'ya']);

Route::get('/cross-syouhin/cross-syouhin-information', [PostController::class, 'ka']);

Route::get('/cross-syouhin-information-crossfan', [PostController::class, 'crossfan']);

Route::get('/cross-syouhin-information-syokuryou', [PostController::class, 'syokuryou']);

Route::get('/cross-syouhin-information-kamera', [PostController::class, 'kamera']);

Route::get('/cross-syouhin-information-car', [PostController::class, 'car']);

Route::get('/cross-syouhin-information-sisaku', [PostController::class, 'sisaku']);