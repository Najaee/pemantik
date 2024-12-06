<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PenyelenggaraController;
use App\Http\Controllers\PjKegiatanController;
use App\Http\Controllers\PjTeknisKegiatanController;
use App\Http\Controllers\WalidataController;
use App\Http\Controllers\PjJadwalKegiatanController;
use App\Http\Controllers\VarUtamaYgDigunakanController;
use App\Http\Controllers\JmlPengumpulanDataController;
use App\Http\Controllers\RancanganLapPublikasiController;
use App\Http\Controllers\MetodePengolahanController;
use App\Http\Controllers\ProdukDataUtkUmumController;
use App\Http\Controllers\PetugasPengumpulanDataController;
use App\Http\Controllers\DesainSampelController;
use App\Http\Controllers\DsNonprobabilitasController;
use App\Http\Controllers\DsProbabilitasController;
use App\Http\Controllers\TtdController;
use App\Http\Controllers\IndikatorPembangunanController;
use App\Http\Controllers\VariabelPembangunanController;
use App\Http\Controllers\MsIndikatorController;
use App\Http\Controllers\MsVarController;
use App\Http\Controllers\DetailKegiatanController;










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

Route::get('/home', function () {
    return view('home');
});



Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Protected route, hanya dapat diakses jika sudah login
Route::middleware('auth')->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('kegiatan', KegiatanController::class);
Route::resource('penyelenggara', PenyelenggaraController::class);
Route::resource('pj_kegiatan', PjKegiatanController::class);
Route::resource('pj_teknis_kegiatan', PjTeknisKegiatanController::class);
Route::resource('walidata', WalidataController::class)->parameters([
    'walidata' => 'walidata',
]);
Route::resource('pj_jadwal_kegiatan', PjJadwalKegiatanController::class);
Route::resource('var_utama_yg_digunakan', VarUtamaYgDigunakanController::class);
Route::resource('jml_pengumpulan_data', JmlPengumpulanDataController::class);
Route::resource('rancangan_lap_publikasi', RancanganLapPublikasiController::class);
Route::resource('metode_pengolahan', MetodePengolahanController::class);
Route::resource('produk_data_utk_umum', ProdukDataUtkUmumController::class);
Route::resource('petugas_pengumpulan_data', PetugasPengumpulanDataController::class)->parameters([
    'petugas_pengumpulan_data' => 'petugas_pengumpulan_data',
]);
Route::resource('desain_sampel', DesainSampelController::class);
Route::resource('ds_nonprobabilitas', DsNonprobabilitasController::class)->parameters([
    'ds_nonprobabilitas' => 'ds_nonprobabilitas', // Pastikan parameter sesuai dengan nama tabel/model
]);
Route::resource('ds_probabilitas', DsProbabilitasController::class)->parameters([
    'ds_probabilitas' => 'ds_probabilitas', // Parameter eksplisit
]);
Route::resource('ttd', TtdController::class);
Route::resource('indikator_pembangunan', IndikatorPembangunanController::class);
Route::resource('variabel_pembangunan', VariabelPembangunanController::class);
Route::resource('ms_indikator', MsIndikatorController::class);
Route::resource('ms_var', MsVarController::class);
Route::resource('detail_kegiatan', DetailKegiatanController::class);
