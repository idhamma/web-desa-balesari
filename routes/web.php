<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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