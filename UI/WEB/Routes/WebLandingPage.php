<?php

use App\Containers\Vendor\Welcome\UI\WEB\Controllers\Controller;
use Illuminate\Support\Facades\Route;

// http://mustang.test
Route::get('/', [Controller::class, 'sayWelcome'])
    ->name('web_welcome_say_welcome');

