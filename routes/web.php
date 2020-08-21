<?php

use Illuminate\Support\Facades\Auth;
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

\App::setLocale('es');


Route::get('/', function () {
    return view('index');
});
Route::get('/home', function () {
    return view('index');
})->name('home');


Route::resource('schools', 'SchoolController')
    ->parameters(['colegios'=>'schools'])
    ->names('schools');


Route::resource('students', 'StudentController')
    ->parameters(['estudiantes'=>'students'])
    ->names('students');


Auth::routes(['register' => false]);
/*
Route::get('/home', 'HomeController@index')->name('home');
 */
