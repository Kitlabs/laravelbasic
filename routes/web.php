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

/*Route::get('/', function () {

    return view('welcome');
});*/
use Illuminate\Http\Request;
Route::get('/', function () {
    $links = \App\Link::all();
    return view('welcome')->with('links', $links);
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/submit','submit@index')->name('submit');
Route::post('/submit','submit@getpost');
Route::get('/contactus','contactus@index')->name('contactus');
