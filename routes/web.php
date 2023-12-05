<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/bb/b1', function () {
    return view('bb.b1');
});
Route::get('/bb/b2', function () {
    return view('bb.b2  ');
});
Route::get('/dd/d1', function () {
    return view('dd.d1');
});
Route::get('/dd/d2', function () {
    return view('dd.d2  ');
});
require __DIR__.'/auth.php';

Route::get('/aa/a1',function (){
    return view('aa.a1');
});
Route::get('/aa/a2',function (){
    return view('aa.a2');
});
Route::get('/cc/c1',function (){
    return view('cc.c1');
});
Route::get('/cc/c1',function (){
    return view('cc.c2');
});
Route::get('/ee/e1',function (){
    return view('ee.e1');
});
Route::get('/ee/e2',function (){
    return view('ee.e2');
});
Route::get('/ff/f1',function (){
    return view('ff.f1');
});
Route::get('/ff/f2',function (){
    return view('ff.f2');
});
Route::get('/gg/g1',function (){
    return view('gg.g1');
});
Route::get('/gg/g2',function (){
    return view('gg.g2');
});
Route::get('/hh/h1',function (){
    return view('hh.h1');
});
Route::get('/hh/h2',function (){
    return view('hh.h2');
});
//testtest
