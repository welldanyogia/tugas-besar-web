<?php

use App\Http\Controllers\JabatanController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/isikegiatan', [\App\Http\Controllers\IsiKegiatan::class,'index'])->name('isikegiatan.index');
Route::get('/transkrip', [\App\Http\Controllers\TranskripController::class,'index'])->name('transkrip.index');
Route::get('/jabatan/form2', [\App\Http\Controllers\JabatanController::class,'form2'])->name('jabatan.form2');
Route::get('/jabatan/form3', [\App\Http\Controllers\JabatanController::class,'form3'])->name('jabatan.form3');
Route::get('/pengabdian/form2', [\App\Http\Controllers\PengabdianController::class,'form2'])->name('pengabdian.form2');
Route::get('/pengabdian/form3', [\App\Http\Controllers\PengabdianController::class,'form3'])->name('pengabdian.form3');
Route::get('/pengolahan/form2', [\App\Http\Controllers\PengolahanController::class,'form2'])->name('pengolahan.form2');
Route::get('/pengolahan/form3', [\App\Http\Controllers\PengolahanController::class,'form3'])->name('pengolahan.form3');
Route::get('/pengembangan/form2', [\App\Http\Controllers\PengembanganController::class,'form2'])->name('pengembangan.form2');
Route::get('/pengembangan/form3', [\App\Http\Controllers\PengembanganController::class,'form3'])->name('pengembangan.form3');
Route::get('/pelayanan/form2', [\App\Http\Controllers\PelayananController::class,'form2'])->name('pelayanan.form2');
Route::get('/pelayanan/form3', [\App\Http\Controllers\PelayananController::class,'form3'])->name('pelayanan.form3');
Route::get('/penulisan/form2', [\App\Http\Controllers\PenulisanController::class,'form2'])->name('penulisan.form2');
Route::get('/penulisan/form3', [\App\Http\Controllers\PenulisanController::class,'form3'])->name('penulisan.form3');
Route::get('/jabatan', [\App\Http\Controllers\JabatanController::class,'index'])->name('jabatan.index');
Route::get('/pengabdian', [\App\Http\Controllers\PengabdianController::class,'index'])->name('pengabdian.index');
Route::get('/pengembangan', [\App\Http\Controllers\PengembanganController::class,'index'])->name('pengembangan.index');
Route::get('/pelayanan', [\App\Http\Controllers\PelayananController::class,'index'])->name('pelayanan.index');
Route::get('/penulisan', [\App\Http\Controllers\PenulisanController::class,'index'])->name('penulisan.index');
Route::get('/pengolahan', [\App\Http\Controllers\PengolahanController::class,'index'])->name('pengolahan.index');


//Jabatan
Route::get('/jabatan/form/{form_number?}', [JabatanController::class, 'index'])->name('jabatan.form');
// Change these lines in your web.php file
Route::post('/jabatan/store1', [JabatanController::class, 'storeForm1'])->name('jabatan.store1');
Route::post('/jabatan/store2', [JabatanController::class, 'storeForm2'])->name('jabatan.store2');
Route::post('/jabatan/store3', [JabatanController::class, 'storeForm3'])->name('jabatan.store3');
//Pengembangan
Route::post('/pengembangan/store1', [\App\Http\Controllers\PengembanganController::class, 'storeForm1'])->name('pengembangan.store1');
Route::post('/pengembangan/store2', [\App\Http\Controllers\PengembanganController::class, 'storeForm2'])->name('pengembangan.store2');
Route::post('/pengembangan/store3', [\App\Http\Controllers\PengembanganController::class, 'storeForm3'])->name('pengembangan.store3');
//Pengabdian
Route::post('/pengabdian/store1', [\App\Http\Controllers\PengabdianController::class, 'storeForm1'])->name('pengabdian.store1');
Route::post('/pengabdian/store2', [\App\Http\Controllers\PengabdianController::class, 'storeForm2'])->name('pengabdian.store2');
Route::post('/pengabdian/store3', [\App\Http\Controllers\PengabdianController::class, 'storeForm3'])->name('pengabdian.store3');
//Pelayanan
Route::post('/pelayanan/store1', [\App\Http\Controllers\PelayananController::class, 'storeForm1'])->name('pelayanan.store1');
Route::post('/pelayanan/store2', [\App\Http\Controllers\PelayananController::class, 'storeForm2'])->name('pelayanan.store2');
Route::post('/pelayanan/store3', [\App\Http\Controllers\PelayananController::class, 'storeForm3'])->name('pelayanan.store3');
//Penulisan
Route::post('/penulisan/store1', [\App\Http\Controllers\PenulisanController::class, 'storeForm1'])->name('penulisan.store1');
Route::post('/penulisan/store2', [\App\Http\Controllers\PenulisanController::class, 'storeForm2'])->name('penulisan.store2');
Route::post('/penulisan/store3', [\App\Http\Controllers\PenulisanController::class, 'storeForm3'])->name('penulisan.store3');
//Pengolahan
Route::post('/pengolahan/store1', [\App\Http\Controllers\PengolahanController::class, 'storeForm1'])->name('pengolahan.store1');
Route::post('/pengolahan/store2', [\App\Http\Controllers\PengolahanController::class, 'storeForm2'])->name('pengolahan.store2');
Route::post('/pengolahan/store3', [\App\Http\Controllers\PengolahanController::class, 'storeForm3'])->name('pengolahan.store3');

Route::get('/download/{fileType}/{fileName}', [JabatanController::class, 'downloadFile'])
    ->name('download.file');
