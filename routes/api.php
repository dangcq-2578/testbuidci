<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;

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

Route::group(['namespace' => 'Api', 'prefix' => 'todos'], function() {
    Route::get('/all', 'TodoController@index');
});
Route::get('/test-user-api', function() {
    return [ 'message' => "Hello World"];
});

Route::get('/user-create', function() {
    App\User::create([
        'name' => 'kimsohyun',
        'email' => 'user@gmail.com',
        'password' => Hash::make('123456789')
    ]);
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
