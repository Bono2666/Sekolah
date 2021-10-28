<?php

use App\Http\Controllers\RoleController;
use App\Http\Controllers\Tes;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/beranda', function () {
    return view('home');
})->name('beranda');

Route::middleware(['auth:sanctum', 'verified'])->resource('roles', RoleController::class);
Route::middleware(['auth:sanctum', 'verified'])->get('roles/delete/{id}', [RoleController::class, 'delete'])->name('roles.delete');