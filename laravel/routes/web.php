<?php

use App\Http\Controllers\UserController;
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

Route::get('/coba-routing', function () {
    return 'Ini adalah hasil percobaan routing';
});

// route dengan parameter
Route::get('/coba-routing/{nama?}', function ($nama = "Nilai Default") {
    return 'Ini adalah hasil percobaan routing. Kenalin, aku' . $nama;
});

//Route dengan Controller dan Route Bernama
Route::get(
    '/users',
    [UserController::class, 'index']
)->name('list-user');

// Group
Route::middleware(['auth'])->group(function () {
    // Route ini menggunakan middleware auth
    Route::get(
        '/users',
        [UserController::class, 'index']
    )->name('list-user');

    // Route ini dan selanjutnya juga akan menggunakan middleware auth
    Route::get('/users/ptrofile', function () {
    });
});

// Prefix

Route::prefix('users.')->group(function () {
    // URI route akan otomatis diawali users/..

    Route::get(
        '/',
        [UserController::class, 'index']
    )->name('list-user');

    // Pemanggilan route name akan menjadi users.list-user
    Route::get('/profile', function () {
    });
});

// Route resource controller
Route::resource('user', UserController::class);

Route::resource('user', UserController::class)->names([
    'index' => 'user.list'
    // tentukan nama action kemudian beri nama setelah prefix user
]);

Route::resource('user', UserController::class)->parameters([
    'index' => 'user_type'
    // Akan menghasilkan URI /user/{user_type}
]);

// Pengiriman data dengan with
Route::get('/halo', function () {
    return view('halo')->with('name', 'Jong Koding');
});

// Pemanggilan blade view pada route
Route::get('/halo', function () {
    return view('halo', [
        "name" => "Jong Koding"
    ]);
});

Route::get('/siswa', 'App\Http\Controllers\SiswaController@index');
