<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Anasayfa;
use App\Http\Controllers\EmanetController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KitapController;
use App\Http\Controllers\UyeController;
use App\Http\Controllers\Uyepanel;


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

Auth::routes();
Route::get('/anasayfa', [Anasayfa::class, 'index'])->name('anasayfa');
Route::get('/kategoriler',[KategoriController::class, 'index'])->name('kategorilerindex');
Route::get('/kategoriler/ekle', [KategoriController::class, 'kategoriekle'])->name('kategori.ekle');
Route::post('/kategoriler/kaydet', [KategoriController::class, 'kategorikaydet'])->name('kategori.kaydet');
Route::get('/kategoriler/{id}/sil',[KategoriController::class, 'kategorisil'])->name('kategori.sil');
Route::patch('/kategoriler/{id}/guncelle', [KategoriController::class, 'kategoriGuncelle'])->name('kategori.guncelle');
Route::get('/kategoriler/{id}/duzenle', [KategoriController::class, 'kategoriDuzenle'])->name('kategori.duzenle');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/kitaplar',[KitapController::class,'index'])->name('kitaplarindex');
Route::get('kitaplar/ekle',[KitapController::class,'kitapekle'])->name('kitap.ekle');
Route::post('kitaplar/kaydet',[KitapController::class,'kitapkaydet'])->name('kitap.kaydet');
Route::get('kitaplar/{id}/sil',[KitapController::class,'kitapsil'])->name('kitap.sil');
Route::patch('/kitaplar/{id}/guncelle', [KitapController::class, 'kitapguncelle'])->name('kitap.guncelle');
Route::get('/kitaplar/{id}/duzenle', [KitapController::class, 'kitapduzenle'])->name('kitap.duzenle');
Route::get('/uyeler',[UyeController::class , 'index'])->name('uyelerindex');
Route::get('/uyeler/ekle', [UyeController::class, 'uyeEkle'])->name('uye.ekle');
Route::post('uyeler/kaydet',[UyeController::class,'uyeKaydet'])->name('uye.kaydet');
Route::get('/uyeler/{id}/sil',[UyeController::class, 'uyeSil'])->name('uye.sil');
Route::patch('/uyeler/{id}/guncelle', [UyeController::class, 'uyeGuncelle'])->name('uye.guncelle');
Route::get('/uyeler/{id}/duzenle', [UyeController::class, 'uyeDuzenle'])->name('uye.duzenle');
Route::get('/emanetler',[EmanetController::class,'index'])->name('emanetlerindex');
Route::get('/emanetler/ekle', [EmanetController::class, 'emanetEkle'])->name('emanet.ekle');
Route::post('/emanetler/kaydet', [EmanetController::class, 'emanetKaydet'])->name('emanet.kaydet');
Route::get('/emanetler/{id}/sil',[EmanetController::class, 'emanetTeslimAl'])->name('emanet.sil');
Route::get('/uyeanasayfa',[Uyepanel::class,'index'])->name('uyepanel');
Route::get('/uyesanayfa/kitap',[Uyepanel::class,'kitap'])->name('uyeanasayfakitap');
Route::get('/cikis',[Uyepanel::class,'cikis'])->name('cikis');
Route::get('/cikis',[Anasayfa::class,'cikis'])->name('cikis');
Route::get('/iletisim',[Anasayfa::class,'iletisim'])->name('iletisim');
Route::get('/iletisimuye',[Uyepanel::class,'iletisimuye'])->name('iletisimuye');