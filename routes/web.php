<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtamaController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AtributController;
use App\Http\Controllers\Admin\WisataController;
use App\Http\Controllers\Admin\PenjagaController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\Detail_AtributController;
use App\Http\Controllers\Admin\PemesananController;
use App\Http\Controllers\Admin\PembayaranController;
use App\Http\Controllers\Admin\RatingController;
use App\Http\Controllers\Admin\Member_AtributController;
use App\Http\Controllers\Admin\FotoController;
use App\Http\Controllers\Admin\ProfilController;
use App\Http\Controllers\LoginController;

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

Route::get('/', [UtamaController::class, 'index']);
Route::get('/buat_password',function(){
    echo bcrypt('login');
});

Route::get('/login',[LoginController::class,'index']);
Route::post('/login',[LoginController::class,'login']);
Route::get('/logout', [App\Http\Controllers\MemberController::class,'logout']);
Route::get('/daftar', [App\Http\Controllers\MemberController::class,'daftar']);
Route::post('/daftar', [App\Http\Controllers\MemberController::class,'store']);
Route::get('/admin/logout',[ProfilController::class,'logout']);



Route::get('/admin',[DashboardController::class,'index'])->middleware('ceklogin');
Route::get('/admin/atribut',[AtributController::class,'index']);
Route::get('/admin/atribut/create',[AtributController::class,'create']);
Route::post('/admin/atribut',[AtributController::class,'store']);
Route::get('/admin/atribut/{id}',[AtributController::class,'show']);
Route::patch('/admin/atribut/{id}',[AtributController::class,'update']);
Route::delete('/admin/atribut/{id}',[AtributController::class,'destroy']);

Route::get('/admin/wisata',[WisataController::class,'index']);
Route::get('/admin/wisata/{id}/show',[WisataController::class, 'show']);
Route::get('/admin/wisata/create',[WisataController::class,'create']);
Route::get('/admin/wisata/{id}',[WisataController::class, 'show']);
Route::post('/admin/wisata',[WisataController::class,'store']);
Route::get('/admin/wisata/{id}',[WisataController::class,'edit']);
Route::patch('/admin/wisata/{id}',[WisataController::class,'update']);
Route::delete('/admin/wisata/{id}',[WisataController::class,'destroy']);

Route::get('/admin/foto',[FotoController::class,'index']);
Route::get('/admin/foto/{id}/create',[FotoController::class,'create']);
Route::get('/admin/foto/{id}/show',[FotoController::class, 'show']);
Route::post('/admin/foto',[FotoController::class, 'store']);
Route::get('/admin/foto/{id}',[FotoController::class,'edit']);
Route::patch('/admin/foto/{id}',[FotoController::class,'update']);
Route::delete('/admin/foto/{id}/{id2}',[FotoController::class,'destroy']);

Route::get('/admin/penjaga',[PenjagaController::class, 'index']);
Route::get('/admin/penjaga/create',[PenjagaController::class,'create']);
Route::post('/admin/penjaga',[PenjagaController::class,'store']);
Route::get('/admin/penjaga/{id}',[PenjagaController::class,'edit']);
Route::patch('/admin/penjaga/{id}',[PenjagaController::class,'update']);
Route::delete('/admin/penjaga/{id}',[PenjagaController::class,'destroy']);

Route::get('/admin/member',[MemberController::class, 'index']);
Route::get('/admin/member/{id}/show',[MemberController::class, 'show']);

Route::get('/admin/detail_atribut/{id}/show',[Detail_AtributController::class, 'show']);
Route::get('/admin/detail_atribut/create',[Detail_AtributController::class,'create']);
Route::post('/admin/detail_atribut',[Detail_AtributController::class,'store']);
Route::get('/admin/detail_atribut/{id}',[Detail_AtributController::class,'edit']);
Route::patch('/admin/detail_atribut/{id}',[Detail_AtributController::class,'update']);
Route::delete('/admin/detail_atribut/{id}/{id2}',[Detail_AtributController::class,'destroy']);

Route::get('/admin/pemesanan',[PemesananController::class, 'index']);
Route::get('/admin/pemesanan/{id}',[PemesananController::class, 'show']);

Route::get('/admin/pembayaran',[PembayaranController::class, 'index']);
Route::get('/admin/pembayaran/{id}',[PembayaranController::class, 'edit']);
Route::patch('/admin/pembayaran/{id}',[PembayaranController::class, 'update']);

Route::get('/admin/rating',[RatingController::class, 'index']);

Route::get('/admin/member_atribut',[Member_AtributController::class, 'index']);
Route::get('/admin/member_atribut/create',[Member_AtributController::class,'create']);
Route::post('/admin/member_atribut',[Member_AtributController::class,'store']);
Route::get('/admin/member_atribut/{id}',[Member_AtributController::class,'show']);
Route::patch('/admin/member_atribut/{id}',[Member_AtributController::class,'update']);
Route::delete('/admin/member_atribut/{id}',[Member_AtributController::class,'destroy']);

Route::get('/penjaga', [App\Http\Controllers\Penjaga\DashboardController::class,'index']);
Route::get('/penjaga/wisata', [App\Http\Controllers\Penjaga\WisataController::class,'index']);
Route::patch('/penjaga/profil/{id}', [App\Http\Controllers\Penjaga\ProfilController::class,'update']);
Route::get('/penjaga/pemesanan', [App\Http\Controllers\Penjaga\PemesananController::class,'index']);
Route::get('/penjaga/pembayaran', [App\Http\Controllers\Penjaga\PembayaranController::class,'index']);

Route::get('/wisata', [App\Http\Controllers\WisataController::class,'index']);
Route::get('/wisata/{id}', [App\Http\Controllers\WisataController::class,'show']);
Route::post('/wisata/cari', [App\Http\Controllers\WisataController::class,'cari']);
Route::get('/wisata/hasil/{id}', [App\Http\Controllers\WisataController::class,'hasil']);
Route::get('/wisata/kategori/{id}', [App\Http\Controllers\WisataController::class,'kategori']);


Route::post('/pemesanan', [App\Http\Controllers\PemesananController::class,'store']);
Route::get('/pemesanan/checkout', [App\Http\Controllers\PemesananController::class,'checkout']);
Route::get('/pemesanan/simpan', [App\Http\Controllers\PemesananController::class,'simpan']);

Route::get('/pembayaran/create/{id}', [App\Http\Controllers\PembayaranController::class,'create']);
Route::post('/pembayaran', [App\Http\Controllers\PembayaranController::class,'store']);
Route::get('/pembayaran/show/{id}', [App\Http\Controllers\PembayaranController::class,'show']);

Route::get('/member', [App\Http\Controllers\Member\DashboardController::class,'index']);
Route::get('/member/profil', [App\Http\Controllers\Member\DashboardController::class,'profil']);
Route::get('/member/pemesanan', [App\Http\Controllers\Member\DashboardController::class,'pemesanan']);
Route::get('/member/rating', [App\Http\Controllers\Member\DashboardController::class,'rating']);
Route::get('/member/rating/create', [App\Http\Controllers\Member\DashboardController::class,'create']);
Route::post('/member/rating', [App\Http\Controllers\Member\DashboardController::class,'store_rating']);
Route::get('/member/atribut', [App\Http\Controllers\Member\DashboardController::class,'atribut']);
Route::patch('/member/atribut', [App\Http\Controllers\Member\DashboardController::class,'update_atribut']);
Route::get('/testimonial', [App\Http\Controllers\Member\DashboardController::class,'testi']);