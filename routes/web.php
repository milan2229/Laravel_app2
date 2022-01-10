<?php

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

// use Illuminate\Routing\Route;

use App\Http\Middleware\HelloMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', 'HelloController@index')->name('hello');
Route::post('/hello', 'HelloController@index')->name('hello');
Route::get('/hello/other', 'HelloController@other');
Route::get('/sample', 'Sample\SampleController@index')->name('sample');

Route::post('/hello/other', 'HelloController@other');

// Route::middleware([HelloMiddleware::class])->group(function () {
//     Route::get('/hello', 'HelloController@index');
//     // Route::get('/hello/other', 'HelloController@other');
// });
Route::namespace('Sample')->group(function () {
    // Route::get('/sample', 'SampleController@index');
    Route::get('/sample/other', 'SampleController@other');
});
