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
    return view('welcome');
});

Route::get('/', 'obatController@index');
Route::get('/obat', 'obatController@getobat');
Route::get('/obat/detailobat/{id}', 'obatController@detailobat');
Route::post('/pendaftaran/cariPendaftar', 'PendaftaranController@cariPendaftar');
Route::get('/welcome', function () {
    return view('welcome');
});



Route::get('/home/user', 'HomeController@Getuser');
Route::get('/home/detailUser/{id}', 'HomeController@detailUser');
Route::get('/home/Tambahuser', 'HomeController@tambahuser');
Route::post('/home/simpanuser', 'HomeController@simpanuser');
Route::get('/home/Edituser/{id}', 'HomeController@edituser');
Route::post('/home/Updateuser', 'HomeController@Updateuser');
Route::get('/home/Deleteuser/{id}', 'HomeController@deleteuser');

Route::get('/home/dokter', 'HomeController@userGetdokter');
Route::get('/home/userDetaildokter/{id}', 'HomeController@detaildokter');
Route::get('/home/userTambahdokter', 'HomeController@tambahdokter');
Route::post('/home/usersimpandokter', 'HomeController@simpandokter');
Route::get('/home/userEditdokter/{id}', 'HomeController@userEditdokter');
Route::post('/home/userUpdatedokter', 'HomeController@userUpdatedokter');
Route::get('/home/userDeletedokter/{id}', 'HomeController@userDeletedokter');

Route::get('/', 'HomeController@index')->name('index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/obatuser', 'HomeController@userGetobat');
Route::get('/home/userDetailobat/{id}', 'HomeController@detailobat');
Route::get('/home/userTambahobat', 'HomeController@tambahobat');
Route::post('/home/userSimpanobat', 'HomeController@simpanobat');
Route::get('/home/userDeleteobat/{id}', 'HomeController@userDeleteobat');
Route::get('/home/userEditobat/{id}', 'HomeController@userEditobat');
Route::post('/home/userUpdateobat', 'HomeController@userUpdateobat');

Route::get('/home/periksa', 'HomeController@Getperiksa');
Route::get('/home/tambahperiksa', 'HomeController@tambahperiksa');
Route::post('/home/simpanperiksa', 'HomeController@simpanperiksa');
Route::get('/home/editperiksa/{id}', 'HomeController@editperiksa');
Route::post('/home/Updateperiksa', 'HomeController@Updateperiksa');
Route::get('/home/Deleteperiksa/{id}', 'HomeController@deleteperiksa');

Route::get('/home/transaksi', 'HomeController@Gettransaksi');
Route::get('/home/tambahtransaksi', 'HomeController@tambahtransaksi');
Route::post('/home/simpantransaksi', 'HomeController@simpantransaksi');
Route::get('/home/edittransaksi/{id}', 'HomeController@edittransaksi');
Route::post('/home/Updatetransaksi', 'HomeController@Updatetransaksi');
Route::get('/home/deletetransaksi/{id}', 'HomeController@deletetransaksi');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
