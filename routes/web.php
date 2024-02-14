<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\BlogController;

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
    return view('home');
});

Route::get('/login', [AuthenticationController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthenticationController::class, 'login']);
Route::post('/logout', function () {
    Auth::logout(); // Đăng xuất người dùng
    return redirect('/'); // Chuyển hướng người dùng đến trang chính sau khi đăng xuất
})->name('logout');

Route::get('/register', [AuthenticationController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthenticationController::class, 'register']);

Route::get('/user', function () {
    return view('user');
})->name('user')->middleware('checkUserRole');

Route::get('/admin', function () {
    return view('admin');
})->name('admin')->middleware('checkUserRole');

Route::get('/contact', function () {
    return view('contactUs');
});
Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/createBlog', function () {
    return view('createBlogs');
});
Route::post('/createBlog', [BlogController::class, 'createBlog'])->name('createBlog');