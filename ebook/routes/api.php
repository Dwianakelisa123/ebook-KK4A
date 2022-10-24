<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeloController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\BookController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*
* Task
* URL : http://localhost/api/halo
* METHOD: GET
* Exec:function
* Return: JSON => {"me": "Ganteng"}
*/

//Route::get('halo', function(){
//   return["me"=> "ganteng"];
//});

Route::get('halo', function(){
    $data = ["me" => "cantik"];

    return $data;
});

//Route::get('helocontrol',[HeloController;;class, 'index']);
//Route::get('helocontroller',[HeloController;;class, 'index']);
//Route::get('helocontroller',[HeloController;;class, 'index']);
Route::resource('helocontroller', HeloController::class);
Route::resource('siswa', SiswaController::class);
Route::resource('book', BookController::class);