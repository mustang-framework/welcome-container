<?php

use App\Containers\Vendor\Welcome\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

// http://api.mustang.test
Route::get('/', [Controller::class, 'apiRoot'])
    ->name('api_welcome_root_page');
