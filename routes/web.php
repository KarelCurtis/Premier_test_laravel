<?php

use App\Http\Controllers\CohorteController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/cohorte', [CohorteController::class,'index']);

Route::get('/candidature', function(){
    return 'Bonjour. ici candidature';
});

Route::get('/formations', function () {
    return ' Les formations';
});

Route::resource('products', ProductController::class);

Route::resource('students','StudentController');

