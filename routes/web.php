<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\EditorController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[RegisterController::class, 'login']);
Route::post('/Authlogin',[RegisterController::class, 'Authlogin']);
Route::get('/logout',[RegisterController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::group(['middleware' => 'viewer'], function(){
    Route::get('/viewers/home', function () {
        return view('viewers.home');
    });

});

Route::group(['middleware' => 'editor'], function(){
    Route::get('/editors/home', function () {
        return view('editors.home');
    });
    Route::get('/editors/view',[EditorController::class, 'view']);

});






