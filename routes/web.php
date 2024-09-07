<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController; 
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\HotelController; 


<<<<<<< HEAD
Route::get('/', [HomeController::class, 'index']);
=======

Route::get('/', [HomeController::class, 'index']);

>>>>>>> 501a867f97dae9db321552769e04c8813ace0cbb


Route::get('/home', [AdminController::class, 'index'])->name('home');

Route::get('/hotel-management', [HotelController::class, 'create'])->name('hotel.create');

Route::post('/hotel-management', [HotelController::class, 'store'])->name('hotel.store');


Route::get('booking', [HotelController::class, 'booking']);
                            



