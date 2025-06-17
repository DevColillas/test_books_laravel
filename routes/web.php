<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [
            'localize',
            'localizationRedirect',
            'localeSessionRedirect',
            'localeViewPath'
        ]
    ],
    function () {

        Route::get('/', HomeController::class)->name('home');

        Route::get(LaravelLocalization::transRoute('routes.books'), [BookController::class, 'index'])->name('books.index');

        Route::get(LaravelLocalization::transRoute('routes.books.create'), [BookController::class, 'create'])->name('books.create');

        Route::post('/books/store', [BookController::class, 'store'])->name('books.store');

        Route::get(LaravelLocalization::transRoute('routes.books.edit'), [BookController::class, 'edit'])->name('books.edit');

        Route::put('/books/{book}', [BookController::class, 'update'])->name('books.update');

        Route::delete(LaravelLocalization::transRoute('routes.books.destroy'), [BookController::class, 'destroy'])->name('books.destroy');

        Route::get(LaravelLocalization::transRoute('routes.contact'), [ContactController::class, 'index'])->name('contact.index');

        Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

        Route::get('/login', function () {
            return view('login');
        })->name('login');
    }
);
