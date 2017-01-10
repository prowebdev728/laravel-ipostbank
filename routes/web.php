<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
// First Route method – Root URL will match this method
Route::get('/', function () {
    return view('welcome');
});

// Second Route method – Root URL with ID will match this method
Route::get('ID/{id}',function($id){
   echo 'ID: '.$id;
});

// Third Route method – Root URL with or without name will match this method
Route::get('/user', 'UserController@index');
Route::get('/user/{name?}',function($name = 'Virat Gandhi'){
   echo "Name: ".$name;
});

Route::get('role', [
	'middleware' => 'Role:editor',
	'uses' => 'TestController@index',
]);

class MyClass{
   public $foo = 'bar';
}
Route::get('/myclass','ImplicitController@index');

Route::get('/foo/bar', 'UriController@index');

Route::get('/register', function(){
	return view('register');
});
Route::post('/user/register', array('uses'=>'UserRegistration@postRegister'));