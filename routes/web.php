<?php

use App\Http\Controllers\Admin\NewsCrudController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\InformasiController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/login', function () {
    return redirect('/admin/login');
});

Route::get('/register', function () {
    return redirect('/admin/login');
});

Route::get('/', function () {
    $news = DB::table('news')->get();
    $information = DB::table('information')->get();
    return view('welcome', ['news' => $news], ['information' => $information]);
});

Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');
Route::get('/informasi/{id}', [InformasiController::class, 'show'])->name('informasi.show');