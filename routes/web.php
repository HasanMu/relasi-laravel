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

Route::get('/relasi-1', function () {
    
    $mahasiswa = App\Mahasiswa::where('nim', '=', '1015015072')->first();
    
    return $mahasiswa->wali->nama;
});

Route::get('/relasi-2', function () {

    $mahasiswa = App\Mahasiswa::where('nim', '=', '1015015072')->first();

    # Tampilkan nama dosen pembimbing
	return $mahasiswa->dosen->nama;
});

Route::get('/relasi-3', function () {

    $dosen = App\Dosen::where('nama', '=', 'Yulianto')->first();

    foreach ($dosen->mahasiswa as $data) {
        echo '<li> Nama : ' . $data->nama . ' <strong>' . $data->nim . '</strong></li>';
    }
});

Route::get('relasi-4', function() {

    # Bila kita ingin melihat hobi saya
    $novay = App\Mahasiswa::where('nama', '=', 'Noviyanto Rachmadi')->first();

    # Tampilkan seluruh hobi si novay
    foreach ($novay->hobi as $temp){
        echo '<li>' . $temp->hobi . '</li>';
    }
});

Route::get('relasi-5', function() {
    $mandi_hujan = App\Hobi::where('hobi', '=', 'Mandi Hujan')->first();

    foreach ($mandi_hujan->mahasiswa as $data) {
        echo '<li> Nama : ' . $data->nama . ' <strong>' . $data->nim . '</strong></li>';
    }
});

Route::get('eloquent', function(){
    $mahasiswa = App\Mahasiswa::with('wali', 'dosen', 'hobi')->get();

    return view('eloquent', compact('mahasiswa'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/hobi', 'HobiController');
Route::resource('/dosen', 'DosenController');
Route::resource('/wali', 'WaliController');
Route::resource('/mahasiswa', 'MahasiswaController');
