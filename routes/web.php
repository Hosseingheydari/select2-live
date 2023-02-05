<?php

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
 Route::get('panel',[App\Http\Controllers\HandlerController::class,'index']);
 Route::get('ll',App\Http\livewire\Panel::class);
 Route::get('uplodeVideo',App\Http\livewire\VideoController::class);

 
