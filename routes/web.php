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

// Umum
    Route::get('/', function () {
        return view('index');
    });

    Route::get('admin', function () {
        return view('admin.index');
    });

    Route::get('dashboard', function () {
        if (Session::get('id_role')=="1"){
            return view('admin.index');
        }elseif (Session::get('id_role')=="2"){
            return view('cabang.index');
        }else {
            return view('siswa.index');
        }
    });

//PSiswa
    Route::get('psiswa', 'Fitur\authsisC@psiswa');

//Login & Register
    // Route::get('logi', function () {
    //     return view('login');
    // });
    Route::resource('login', 'Fitur\authsisC');
    Route::get('logout', 'Fitur\authsisC@logout');
    
    Route::post('loginPost', 'User@loginPost');
    // Route::get('logout', 'User@logout');

    // Route::get('logout', 'User@logout');
    Route::post('loginPost', 'User@loginPost');

    Route::get('register', 'User@register');
    Route::post('registerPost', 'User@registerPost');

//Manage User
    Route::post('userPost', 'Fitur\userC@UPost');
    Route::resource('user', 'Fitur\userC');

//Manage Role
    Route::post('rolePost', 'Fitur\roleC@RPost');
    Route::resource('role', 'Fitur\roleC');

//Profil Siswa
    Route::post('siswaPost', 'Fitur\siswaC@SPost');
    Route::resource('sis', 'Fitur\siswaC');

//Info Jadwal
    Route::post('jadwalPost', 'Fitur\jadwalC@JPost');
    Route::post('jadwalImport', 'Fitur\jadwalC@JImport');
    Route::post('jadwalDeleteAll', 'Fitur\jadwalC@JDelete');
    Route::resource('jadwal', 'Fitur\jadwalC');

//Info Absensi
    Route::post('absensiPost', 'Fitur\absensiC@APost');
    Route::resource('absensi', 'Fitur\absensiC');

//Info Nilai
    Route::post('nilaiPost', 'Fitur\nilaiC@NPost');
    Route::resource('nilai', 'Fitur\nilaiC');
//Info Event
    Route::post('eventPost', 'Fitur\eventC@EPost');
    Route::resource('event', 'Fitur\eventC');

//Info Ringkasan Materi
    Route::post('ringkasanPost', 'Fitur\ringmatC@RPost');
    Route::resource('ringkasan', 'Fitur\ringmatC');

//Info Tugas
    Route::post('tugasPost', 'Fitur\tugasC@TPost');
    Route::resource('tugas', 'Fitur\tugasC');

//Tidak Jadi
    // Auth::routes();
    // Route::get('/home', 'HomeController@index')->name('home');
