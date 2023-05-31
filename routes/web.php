<?php

use App\Http\Controllers\BiodataController;
use App\Models\biodata;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [BiodataController::class, 'tampil']);

Route::get('/about', function () {
    return  view('about', [
        "title" => "About",
        "name" => "Hello In About Page!! 🚀",
    ]);
});