<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\Permission\Models\Role;
use App\Permission\Models\Permission;
use Illuminate\Support\Facades\Gate;

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

Route::get('/premium', function () {
    return view('premium');
});

Route::get('/informacion-legal', function () {
    return view('legal.informacion-legal');
});

Route::get('/privacidad', function () {
    return view('legal.privacidad');
});

Route::get('/tutorial', function () {
    return view('tutorial');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/role', 'RoleController')->names('role');

Route::resource('/user', 'UserController', ['except'=>['create','store']])->names('user');

Route::get('/{name}', 'UserController@Qr');

