<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;

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

// Route::view('/simple', 'simple_datatable');
Route::get('/simple', [PeopleController::class, 'list']);

// Route::view('/datatable', 'jquery_datatable');
Route::get('/datatable', [PeopleController::class, 'dataTable']);