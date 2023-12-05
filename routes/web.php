<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Form;
use App\Http\Controllers\Home;

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

//Home
Route::get('/',[Home::class, 'index']);

//Form
//create
Route::get('/formreq',[Form::class, 'index']);
Route::post('/request',[Form::class, 'store']);
//update
Route::get('/edit/{id}', [Form::class, 'edit']);
Route::post('/editdata/{id}',[Form::class, 'update']);
//delete
Route::get('/delete/{id}',[Form::class, 'destroy']);
