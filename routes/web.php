<?php

use App\Http\Controllers\ControllerTask;
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


Route::get('home', function(){
    return view('welcome');
});
Route::get('/', [ControllerTask::class, 'getList']);
Route::post('/', [ControllerTask::class, 'store']);
Route::put('/', [ControllerTask::class, 'update']);
Route::delete('/', [ControllerTask::class, 'destroy']);
Route::get('/{id}', [ControllerTask::class, 'get']);
