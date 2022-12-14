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

Route::get('/', \App\Http\Livewire\Home::class);
Route::group(['prefix' => 'kegiatan', 'as' => 'kegiatan.'], function () {
    Route::get('/', \App\Http\Livewire\Kegiatan\Index::class);
    Route::get('/{key}', \App\Http\Livewire\Kegiatan\Detail::class);
});
Route::group(['prefix' => 'pengumuman', 'as' => 'pengumuman.'], function () {
    Route::get('/', \App\Http\Livewire\Pengumuman\Index::class);
    Route::get('/{key}', \App\Http\Livewire\Pengumuman\Detail::class);
});
Route::group(['prefix' => 'profil', 'as' => 'profil.'], function () {
    Route::get('/visimisi', \App\Http\Livewire\Profil\Visimisi::class);
    Route::get('/sejarah', \App\Http\Livewire\Profil\Sejarah::class);
    Route::get('/atribut', \App\Http\Livewire\Profil\Atribut::class);
    Route::get('/sambutan', \App\Http\Livewire\Profil\Sambutan::class);
    Route::get('/pengurus', \App\Http\Livewire\Profil\Pengurus::class);
    Route::get('/cabang', \App\Http\Livewire\Profil\Cabang::class);
});
Route::get('/kontak', \App\Http\Livewire\Kontak::class);
Route::get('/download', \App\Http\Livewire\Download::class);

Route::get('/login', \App\Http\Livewire\Adminarea\Login::class)->name('login');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin-area'], function () {
    Route::get('/logout', \App\Http\Livewire\Adminarea\Logout::class)->name('logout');
    Route::group(['prefix' => '/profil'], function () {
        Route::get('/sambutanketua', \App\Http\Livewire\Adminarea\Profil\Sambutanketua::class);
        Route::get('/pengurus', \App\Http\Livewire\Adminarea\Profil\Pengurus::class);
        Route::get('/sejarahsingkat', \App\Http\Livewire\Adminarea\Profil\Sejarahsingkat::class);
        Route::get('/visimisi', \App\Http\Livewire\Adminarea\Profil\Visimisi::class);
        Route::get('/atributibi', \App\Http\Livewire\Adminarea\Profil\Atributibi::class);
        Route::get('/cabang', \App\Http\Livewire\Adminarea\Profil\Cabang::class);
    });
    Route::group(['prefix' => '/datamaster'], function () {
        Route::group(['prefix' => '/kategori'], function () {
            Route::get('/', \App\Http\Livewire\Adminarea\Datamaster\Kategori\Index::class);
            Route::get('/tambah', \App\Http\Livewire\Adminarea\Datamaster\Kategori\Form::class);
            Route::get('/edit/{key}', \App\Http\Livewire\Adminarea\Datamaster\Kategori\Form::class);
        });
    });
    Route::group(['prefix' => '/kegiatan'], function () {
        Route::get('/', \App\Http\Livewire\Adminarea\Kegiatan\Index::class);
        Route::get('/tambah', \App\Http\Livewire\Adminarea\Kegiatan\Form::class);
        Route::get('/edit/{key}', \App\Http\Livewire\Adminarea\Kegiatan\Form::class);
    });
    Route::group(['prefix' => '/file'], function () {
        Route::get('/', \App\Http\Livewire\Adminarea\File\Index::class);
        Route::get('/tambah', \App\Http\Livewire\Adminarea\File\Form::class);
    });
    Route::group(['prefix' => '/agenda'], function () {
        Route::get('/', \App\Http\Livewire\Adminarea\Agenda\Index::class);
        Route::get('/tambah', \App\Http\Livewire\Adminarea\Agenda\Form::class);
        Route::get('/edit/{key}', \App\Http\Livewire\Adminarea\Agenda\Form::class);
    });
    Route::group(['prefix' => '/carousel'], function () {
        Route::get('/', \App\Http\Livewire\Adminarea\Carousel\Index::class);
        Route::get('/tambah', \App\Http\Livewire\Adminarea\Carousel\Form::class);
        Route::get('/edit/{key}', \App\Http\Livewire\Adminarea\Carousel\Form::class);
    });
    Route::group(['prefix' => '/pengumuman'], function () {
        Route::get('/', \App\Http\Livewire\Adminarea\Pengumuman\Index::class);
        Route::get('/tambah', \App\Http\Livewire\Adminarea\Pengumuman\Form::class);
        Route::get('/edit/{key}', \App\Http\Livewire\Adminarea\Pengumuman\Form::class);
    });
    Route::get('/gantipassword', \App\Http\Livewire\Adminarea\Gantipassword::class);
    Route::get('/', \App\Http\Livewire\Adminarea\Index::class);
});
