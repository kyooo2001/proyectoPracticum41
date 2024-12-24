<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/recovery', function () {
    return view('recoverypwd'); 
});

Route::get('/doctors', function () {
    return view('doctors'); 
});

Route::get('/patients', function () {
    return view('patients'); 
});

Route::get('/', function () {
    return view('home');
})->name ('home');

Route::resource('doctors', DoctorController::class);
Route::resource('patients', PatientController::class);
