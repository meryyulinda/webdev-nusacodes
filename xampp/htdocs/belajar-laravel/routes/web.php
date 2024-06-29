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
    return view('welcome'); // this will return resources/views/welcome.blade.php
});

Route::get('/test', function () {
    echo "<html>
    <head>
    </head>
    <body style='background-color: #33475b; color: white;'>
        <p>welcomeee</p>
    </body>
    </html>";
});


Route::get('/home', function () {
    return view('home');
});


Route::get('/profile', function () {
    # return Kalimat
    // return "This is Profile page";

    # Memanggil View
    return view('profile', ['full_name' => 'John Doe', 'age' => '20 years old', 'score' => '30']);

});

# Memanggil Controller
Route::get('/profile-ctl', 'App\Http\Controllers\ProfileController@one');

# Get Profile page, but the template using bootstrap theme
Route::get('/profile-bs', function() {
    return view('profile-bs', ['full_name' => 'John Doe', 'age' => '20 years old', 'score'=>'30']);
});

# Modul Employee
Route::get('/employee', 'App\Http\Controllers\EmployeeController@index');
Route::post('/employee/tambah', 'App\Http\Controllers\EmployeeController@tambah');
Route::get('/employee/edit/{id_employee}', 'App\Http\Controllers\EmployeeController@edit');
Route::post('/employee/update', 'App\Http\Controllers\EmployeeController@update');
Route::get('/employee/hapus/{id_employee}', 'App\Http\Controllers\EmployeeController@hapus');