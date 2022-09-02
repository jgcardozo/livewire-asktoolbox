<?php
require __DIR__ . '/auth.php';



use App\Http\Livewire\ShowCoupons;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/coupons', ShowCoupons::class)->name('coupons');

