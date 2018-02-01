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
//Lorsqu'on demande la page test, on reçoit {"success" : true}
Route::get('/test', function(){
  return '{"success" : true}';
});
//Lorsqu'on demande la page todos, on reçoit les todos à faire
Route::get('/todos', function() {
  return '<ul><li>id : 1 - item : Do this</li><li>id : 2 - item : Do that</li></ul>';
});
