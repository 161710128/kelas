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

Route::get('/', function () {
    return view('welcome');
 });

// route::get('/about/1', function() {
// 	return '<h1>Halo ini halama ke 1</h1>'
// 	.'Selamat Datang Di Webapp Saya'."<br>"
// 	.'Laravel, emang keren.';
// });

// route::get('/about/2', function() {
// 	return '<h1>Halo ini halama ke 2</h1>'
// 	.'Selamat Datang Di Webapp Saya'."<br>"
// 	.'Laravel, emang keren.';
// });

// route::get('/about/3', function() {
// 	return '<h1>Halo ini halama ke 3</h1>'
// 	.'Selamat Datang Di Webapp Saya'."<br>"
// 	.'Laravel, emang keren.';
// });

// route::get('/about/4', function() {
// 	return '<h1>Halo ini halama ke 4</h1>'
// 	.'Selamat Datang Di Webapp Saya'."<br>"
// 	.'Laravel, emang keren.';
// });

// route::get('/about/5', function() {
// 	return '<h1>Halo ini halama ke 5</h1>'
// 	.'Selamat Datang Di Webapp Saya'."<br>"
// 	.'Laravel, emang keren.';
// });


// route::get('/about/{page}', function($a){
// 	return 'ini adalah halaman about <b>'.$a."<br>";
// });
// route::get('/', function (){
// 	return veiw('welcome');
// });

// route::get('/kontak', function (){
// 	return veiw('kontak');
// });


// route::get('/about/bakso/susu/bolu', function ($a,$b,$c){
// 	return view('kantin');	

// });


// route::get('/kantin/{makannya}/{minummnya}/{ngemilnya}', function ($a,$b,$c){
// 	return 'saya makan '.$a."<br>"
// 	       .'saya minum '.$b."<br>"
// 	       .'saya ngemil '.$c."<br>";
// });


route::get('/user/{name?}', function ($name = 'jhon'){
	return 'nama saya <br>'.$name;	

});