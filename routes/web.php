<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/page1', function () {
    return view('pages.page1');
});

Route::get('/page2', function () {
    return view('pages.page2');
});

Route::get('/page3', function () {
    return view('pages.page3');
});

Route::get('/page4', function () {
    return view('pages.page4');
});

Route::get('/page5', function () {
    return view('pages.page5');
});

Route::get('/page6', function () {
    return view('pages.page6');
});

Route::get('/page7', function () {
    return view('pages.page7');
});

Route::get('/page8', function () {
    return view('pages.page8');
});

Route::get('/page9', function () {
    return view('pages.page9');
});

Route::get('/page10', function () {
    return view('pages.page10');
});

Route::get('/page11', function () {
    return view('pages.page11');
});

Route::get('/page12', function () {
    return view('pages.page12');
});

Route::get('/page13', function () {
    return view('pages.page13');
});
// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
