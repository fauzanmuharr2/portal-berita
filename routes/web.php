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

Route::get('penulis', function(){
    $penulis = \App\User::find(1);

    foreach ($penulis->artikel as $data) {
        echo "Judul : $data->judul<br>";
        echo "Deskripsi : $data->deskripsi<br>";
        echo "Slug : $data->slug<br>";
        echo "<hr>";
    }
});

// Relasi
    use App\Mahasiswa;
    use App\Dosen;
    use App\Hobi;
    use App\Wali;

    Route::get('relasi1', function(){
            #mencari mahasiswa dengan NIM 020202
            $mahasiswa = Mahasiswa::where('nim', '=', '020202')->first();

            # menampilkan nama wali dari mahasiswa
            return $mahasiswa->wali->nama;
    });

    Route::get('relasi2', function(){
            #mencari mahasiswa dengan NIM 1010101
            $mahasiswa = Mahasiswa::where('nim', '=', '020202')->first();

            #mencari dosen dengan nim
            return $mahasiswa->dosen->nama;
    });

    Route::get('relasi3', function(){
            #mencari mahasiswa dengan Nama fauzan
            $mahasiswa = Mahasiswa::where('nama', '=', 'Ojan')->first();

            #mencari dosen dengan nama
            foreach ($dosen->mahasiswa as $temp) {
                echo '<li> Nama : '. $temp->nama .
                ' <strong> ' . $temp->nim . '</strong></li>';
            }
    });

    Route::get('relasi4', function(){
            #mencari mahasiswa dengan Nama Bang NAU
            $novay = Mahasiswa::where('nama', '=', 'Bang Nau')->first();

            #mencari dosen dengan nim
            foreach ($novay->hobi as $temp) {
                echo '<li>'. $temp->hobi .'</li>';
            }
    });

    Route::get('relasi5', function(){
            #mencari hobi dengan Nama Mandi Hujan
            $mandi_hujan = Hobi::where('hobi', '=', 'Mandi Hujan')->first();

            #mencari dosen dengan nim
            foreach ($mandi_hujan->mahasiswa as $temp) {
                echo '<li> Nama : '. $temp->nama .
                ' <strong> ' . $temp->nim . '</strong></li>';
            }
    });

    Route::resource('siswa', 'SiswaController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('tabungan/report','TabunganController@jumlah_tabungan');
Route::resource('tabungan', 'TabunganController');
