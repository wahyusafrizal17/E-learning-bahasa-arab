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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/elearning/materi', [App\Http\Controllers\HomeController::class, 'materi'])->name('elearning.materi');
Route::get('/elearning/materi/{id}', [App\Http\Controllers\HomeController::class, 'detail'])->name('elearning.detail');
Route::get('/elearning/about', [App\Http\Controllers\HomeController::class, 'about'])->name('elearning.about');

// Route::get('/', function () {
//         return view('welcome');
//     });

Route::middleware(['auth'])->group(function () {
    // Route::get('/', function () {
    //     return view('welcome');
    // });

    Route::resource('materi', 'App\Http\Controllers\MateriController');
    Route::post('materi/delete', 'App\Http\Controllers\MateriController@delete')->name('materi.delete');

    Route::resource('users', 'App\Http\Controllers\UsersController');
    Route::post('users/delete', 'App\Http\Controllers\UsersController@delete')->name('users.delete');

    Route::resource('siswa', 'App\Http\Controllers\SiswaController');
    Route::post('siswa/delete', 'App\Http\Controllers\SiswaController@delete')->name('siswa.delete');
    Route::get('siswa/{id}/kelas', 'App\Http\Controllers\SiswaController@kelas')->name('siswa.kelas');
    Route::post('siswa/{id}/add-kelas', 'App\Http\Controllers\SiswaController@addKelas')->name('siswa.addKelas');
    Route::post('siswa/{id}/remove-kelas', 'App\Http\Controllers\SiswaController@removeKelas')->name('siswa.removeKelas');

    Route::resource('guru', 'App\Http\Controllers\GuruController');
    Route::post('guru/delete', 'App\Http\Controllers\GuruController@delete')->name('guru.delete');

    Route::resource('kelas', 'App\Http\Controllers\KelasController');
    Route::post('kelas/delete', 'App\Http\Controllers\KelasController@delete')->name('kelas.delete');
    Route::post('kelas/{id}/add-siswa', 'App\Http\Controllers\KelasController@addSiswa')->name('kelas.addSiswa');
    Route::post('kelas/{id}/remove-siswa', 'App\Http\Controllers\KelasController@removeSiswa')->name('kelas.removeSiswa');
});