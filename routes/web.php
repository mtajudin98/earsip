<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KantorIndukController;
use App\Http\Controllers\UnitKerjaController;
use App\Http\Controllers\KategoriDokumenController;
use App\Http\Controllers\GroupDokumenController;
use App\Http\Controllers\DetailArsipController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\MemberController;

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
Route::controller(AuthController::class)->group(function(){
    Route::get('register','register')->name('register');
    Route::post('register','registerSave')->name('register.save');

    Route::get('login','login')->name('login');
    Route::post('login','loginAction')->name('login.action');
    Route::get('logout','logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function(){
    Route::get('dashboard',function(){
        return view('dashboard');
    })->name('dashboard');

    Route::controller(KantorIndukController::class)->prefix('kantor_induk')->group(function(){
        Route::get('','index')->name('kantor_induk');
        Route::get('create','create')->name('kantorinduk.create');
        Route::post('store','store')->name('kantorinduk.store');
        Route::get('show/{id}','show')->name('kantorinduk.show');
        Route::get('edit/{id}','edit')->name('kantorinduk.edit');
        Route::put('edit/{id}','update')->name('kantorinduk.update');
        Route::delete('destroy/{id}','destroy')->name('kantorinduk.destroy');
    });

    Route::controller(DetailArsipController::class)->prefix('detail-arsip')->group(function(){
        Route::get('','index')->name('detail-arsip');
        Route::get('create','create')->name('detail-arsip.create');
        Route::post('store','store')->name('detail-arsip.store');
        Route::get('show/{id}','show')->name('detail-arsip.show');
        Route::get('edit/{id}','edit')->name('detail-arsip.edit');
        Route::put('edit/{id}','update')->name('detail-arsip.update');
        Route::delete('destroy/{id}','destroy')->name('detail-arsip.destroy');
    });


    Route::controller(UnitKerjaController::class)->prefix('unit-kerja')->group(function(){
        Route::get('','index')->name('Unit-kerja');
        Route::get('create','create')->name('unit-kerja.create');
        Route::post('store','store')->name('unit-kerja.store');
        Route::get('show/{id}','show')->name('unit-kerja.show');
        Route::get('edit/{id}','edit')->name('unit-kerja.edit');
        Route::put('edit/{id}','update')->name('unit-kerja.update');
        Route::delete('destroy/{id}','destroy')->name('unit-kerja.destroy');
    });


    Route::controller(KategoriDokumenController::class)->prefix('kategori-dokumen')->group(function(){
        Route::get('','index')->name('kategori-dokumen');
        Route::get('create','create')->name('kategori-dokumen.create');
        Route::post('store','store')->name('kategori-dokumen.store');
        Route::get('show/{id}','show')->name('kategori-dokumen.show');
        Route::get('edit/{id}','edit')->name('kategori-dokumen.edit');
        Route::put('edit/{id}','update')->name('kategori-dokumen.update');
        Route::delete('destroy/{id}','destroy')->name('kategori-dokumen.destroy');
    });


    Route::controller(GroupDokumenController::class)->prefix('group-dokumen')->group(function(){
        Route::get('','index')->name('group-dokumen');
        Route::get('create','create')->name('group-dokumen.create');
        Route::post('store','store')->name('group-dokumen.store');
        Route::get('show/{id}','show')->name('group-dokumen.show');
        Route::get('edit/{id}','edit')->name('group-dokumen.edit');
        Route::put('edit/{id}','update')->name('group-dokumen.update');
        Route::delete('destroy/{id}','destroy')->name('group-dokumen.destroy');
    });


    Route::controller(PeminjamanController::class)->prefix('peminjaman')->group(function(){
        Route::get('','index')->name('peminjaman');
        Route::get('create','create')->name('peminjaman.create');
        Route::post('store','store')->name('peminjaman.store');
        Route::get('show/{id}','show')->name('peminjaman.show');
        Route::get('edit/{id}','edit')->name('peminjaman.edit');
        Route::put('edit/{id}','update')->name('peminjaman.update');
        Route::delete('destroy/{id}','destroy')->name('peminjaman.destroy');
    });

    Route::controller(PengembalianController::class)->prefix('pengembalian')->group(function(){
        Route::get('','index')->name('pengembalian');
        Route::get('create','create')->name('pengembalian.create');
        Route::post('store','store')->name('pengembalian.store');
        Route::get('show/{id}','show')->name('pengembalian.show');
        Route::get('edit/{id}','edit')->name('pengembalian.edit');
        Route::put('edit/{id}','update')->name('pengembalian.update');
        Route::delete('destroy/{id}','destroy')->name('pengembalian.destroy');
    });

    Route::controller(MemberController::class)->prefix('member')->group(function(){
        Route::get('','index')->name('member');
        Route::get('create','create')->name('member.create');
        Route::post('store','store')->name('member.store');
        Route::get('show/{id}','show')->name('member.show');
        Route::get('edit/{id}','edit')->name('member.edit');
        Route::put('edit/{id}','update')->name('member.update');
        Route::delete('destroy/{id}','destroy')->name('member.destroy');
        Route::get('/dashboard-member','home1')->name('dashboard2');
        Route::get('/dashboard-manajer','home2')->name('dashboard3');
    });


    Route::get('/profile',[App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});
