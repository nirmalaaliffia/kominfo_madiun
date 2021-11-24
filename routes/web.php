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


Route::get('/', function () {
    return view('home');
});


Route::get('/nama_pejabat', function () {
    return view('home/nama_pejabat',[
        'title' => 'Nama-Nama Pejabat',
        'parent' => 'Home',
        'child' => 'Nama Pejabat',
        'href' => '/']);
});

Route::get('/tupoksi', function () {
    return view('home/tupoksi',[
        'title' => 'Tupoksi',
        'parent' => 'Home',
        'child' => 'Tupoksi',
        'href' => '/']);
});

Route::get('/aspirasi_dan_pengaduan', function () {
    return view('home/aspirasi_dan_pengaduan',[
        'title' => 'Aspirasi dan Pengaduan',
        'parent' => 'Home',
        'child' => 'Aspirasi dan Pengaduan',
        'href' => '/']);
});

Route::get('/prosedur_permohonan_informasi', function () {
    return view('home/permohonan_informasi',[
        'title' => 'Prosedur Permohonan Informasi',
        'parent' => 'Layanan Informasi',
        'child' => 'Prosedur Permohonan Informasi',
        'href' => '#']);
});


Route::get('/pengajuan_keberatan', function () {
    return view('home/pengajuan_keberatan',[
        'title' => 'Prosedur Pengajuan Keberatan',
        'parent' => 'Layanan Informasi',
        'child' => 'Prosedur Pengajuan Keberatan',
        'href' => '#']);
});

Route::get('/penyelesaian_sengketa', function () {
    return view('home/penyelesaian_sengketa',[
        'title' => 'Prosedur Penyelesaian Sengketa',
        'parent' => 'Layanan Informasi',
        'child' => 'Prosedur Penyelesaian Sengketa',
        'href' => '#']);
});

Route::get('/sk_ppid', function () {
    return view('home/sk_ppid',[
        'title' => 'SK PPID Dinas Kominfo',
        'parent' => 'Home',
        'child' => 'SK PPID Dinas Kominfo',
        'href' => '/']);
});

Route::get('/data_pegawai', function () {
    return view('home/data_pegawai',[
        'title' => 'Data Pegawai Dinas Komunikasi dan Informatika Kota Madiun',
        'parent' => 'Home',
        'child' => 'Data Pegawai',
        'href' => '/']);
});





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/welcome', [App\Http\Controllers\HomeController::class, 'welcome'])->name('welcome')->middleware('auth');
