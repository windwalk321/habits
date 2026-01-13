<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'landing')->name('home');

Route::view('/app/{any?}', 'app')->where('any', '.*')->name('app');

require __DIR__.'/settings.php';
