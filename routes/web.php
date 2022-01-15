<?php

use Illuminate\Support\Facades\Route;
use Modules\Mail\Http\Controllers\MailController;
use Modules\Mail\Http\Controllers\Error;

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

Route::get(
    '/',
    function () {
        return view('welcome');
    }
);

Route::get(
    '/dashboard',
    function () {
        return view('dashboard');
    }
)->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('mails', MailController::class)
    ->only(['index', 'create'])
    ->middleware(['auth', 'ban']);
Route::get('/403', Error::class)->name('403');
