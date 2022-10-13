<?php

use GuzzleHttp\Psr7\Message;
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

Route::get('/name', function () {
    $name = "Dimitri Kobakhidze";
    return view('custom',['variable'=>$name]);
});
Route::get('age',function (){
    $age = 21;
    return view('custom',['variable'=>$age]);
});
Route::get('/hobby',function (){
    $hobby='Kalatburti';
    return view('custom',['variable'=>$hobby]);
});
Route::get('/fav_language',function (){
    $favLanguage="Javascript/React.js";
    return view('custom',['variable'=>$favLanguage]);
});
Route::get('/fav_footballteam',function (){
    $fav_footballerteam="Real Madrid";
    return view('custom',['variable'=>$fav_footballerteam]);
});

Route::post('post_route',function (){
    $array = [
        "message" => 'Carmatebit Ganaxlda'
    ];
    return json_encode($array);
});
Route::get('/post_page',function(){
    return view('post');
});

Route::delete('delete_route',function (){
    $array = [
        "message" => 'Carmatebit caishala'
    ];
    return json_encode($array);
});
Route::get('/delete_page',function(){
    return view('delete');
});
Route::put('put_route',function (){
    $array = [
        "message" => 'Carmatebit daemata'
    ];
    return json_encode($array);
});
Route::get('/put_page',function(){
    return view('put');
});
