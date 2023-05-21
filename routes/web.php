<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\landingPageController;
use App\Http\Controllers\pelayananController;
use App\Http\Controllers\tentangkamiController;
use App\Http\Controllers\kontakController;
use App\Http\Controllers\pembayaranController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\galeriController;


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
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'login']);
Route::get('/', [landingPageController::class, 'index']);
Route::get('/pelayanan', [pelayananController::class, 'pelayanan']);
Route::get('/pending', [pembayaranController::class, 'index']);



Route::get('/', [landingPageController::class, 'index']);
Route::get('/pelayanan', [pelayananController::class, 'pelayanan']);
Route::get('/tentangkami', [tentangkamiController::class, 'tentangkami']);
Route::get('/kontak', [kontakController::class, 'kontak']);
Route::get('/sfsfsfsf', [pembayaranController::class, 'index']);
Route::get('/galeri', [galeriController::class, 'galeri']);




//PEMBAYARAN
Route::get('/pembayaran', [pembayaranController::class, 'pembayaran']);



//LOGIN REGISTER
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/register', [AuthController::class, 'register']);


