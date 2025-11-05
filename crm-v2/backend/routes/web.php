<?php

use Illuminate\Support\Facades\Route;

// Define the web routes for the application

Route::get('/', function () {
    return view('welcome');
});

// Add more routes as needed
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');