<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Page;

Route::group(
    [
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){


            // Route::get('/', function () {
            //     return view('index');
            // });

            Route::get('/', [Page::class, 'home'])->name('home');
            Route::get('blog', [Page::class, 'blog'])->name('blog');
            Route::get('about', [Page::class, 'about'])->name('about');
            Route::get('shop', [Page::class, 'shop'])->name('shop');
        });