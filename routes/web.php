<?php

use Illuminate\Support\Facades\Route;
use App\API\SimCardsAPI\Context;
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


Route::get('/test', function (){
    return view('test');
});
Route::post('/test/send', 'TestController@store')->name('test.store');


Route::get('/threads', 'ThreadsController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
