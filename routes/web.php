<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransactionsController;
use App\Http\Controllers\TravelPackageController;

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
    return view('index');
})->name('home');
Route::get('/package', function (){
    return view('package');
})->name('package');
Route::get('/detail', function (){
    return view('detail-packed');
})->name('detail');
Route::get('/gallery', function (){
    return view('gallery');
})->name('gallery');

Route::get('/dashboard', 'UserController@index', function () {

})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('users', UserController::class);

Route::resource('travelpackages', TravelPackageController::class);

Route::resource('transactions',TransactionsController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('admin')->group(function (){
        Route::get('/login',[AdminController::class, 'Index'])->name('login_form');
        Route::post('/login/owner',[AdminController::class, 'Login'])->name('admin.login');
        Route::get('/dashboard',[AdminController::class, 'Dashboard'])->name('admin.dashboard')->middleware('admin');
        Route::post('/logout',[AdminController::class, 'AdminLogout'])->name('admin.logout')->middleware('admin');
        Route::get('/register',[AdminController::class, 'AdminRegister'])->name('admin.register');
        Route::post('/register/create',[AdminController::class, 'AdminRegisterCreate'])->name('admin.register.create');
});



require __DIR__.'/auth.php';
