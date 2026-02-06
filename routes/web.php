<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\About;
use App\Http\Controllers\Contact;
use App\Http\Controllers\Programs;

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });


Route::get('/',function(){
return Inertia::render('IndexPage');
});

Route::get('/about', [About::class, 'aboutUs']);
Route::get('/contact',[Contact::class,'contactUs']);
Route::get('/program',[Programs::class,'programsIndex']);






Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
