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
    return view('index');
})->name('index');


Route::get('/contato', function () {
    return view('contato');
})->name('contato');


Route::get('/home', function () {
    return view('home');
})->name('home');


// Route::get('/perfil', function () {
//     return view('perfil');
// })->name('perfil');

Route::get('/perfil/{id}', 'PerfilController@show');





// Route::get('/listaLocais', function () {
//     return view('listaLocais');
// })->name('listaLocais');

Route::get('/listaLocais', 'LocalController@index')->name('listaLocais');


// Route::get('/locais', function () {
//     return view('locais');
// })->name('locais');

Route::get('/local/{id}', 'LocalController@show');


// Route::get('/addLocal', function () {
//     return view('addLocal');
// })->name('addLocal');

Route::get('/addLocal', 'LocalController@create')->name('addLocal');
Route::post('/addLocal', 'LocalController@store');





Route::get('/addPartida', function () {
    return view('addPartida');
})->name('addPartida');






// Route::get('/editarPerfil', function () {
//     return view('editarPerfil');
// })->name('editarPerfil');

// Route::get('editarPerfil/{user}',  ['as' => 'editarPerfil', 'uses' => 'UserController@edit']);
// Route::patch('editarPerfil/{user}/update',  ['as' => 'editarPerfil.update', 'uses' => 'UserController@update']);

Route::get('/editarPerfil/{user}', 'UserController@edit');
Route::put('/editarPerfil/{user}', 'UserController@update');





// Route::get('/editarLocal', function () {
//     return view('editarLocal');
// })->name('editarLocal');

Route::get('/editarLocal/{id}', 'LocalController@edit');
Route::put('/editarLocal/{id}', 'LocalController@update');


Route::delete('/exclui-local/{id}', 'LocalController@delete');



Route::get('/pesquisa', function () {
    return view('pesquisa');
})->name('pesquisa');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
