<?php

use App\Http\Controllers\Home;
use App\Http\Controllers\Login;
use App\Http\Controllers\ManageProduct;
use App\Http\Controllers\Register;
use App\Models\Logins;
use App\Models\registers;
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
Route::get('/',[Home::class, 'view']);

Route::middleware(['guest'])->group(function(){
    Route::get('/Logins', [Login::class,'view'])->name('login');
    Route::post('/Logins', [Login::class,'login']);
    Route::get('/Registers', [Register::class,'view']);
    Route::post('/Registers', [Register::class, 'regist']);
});

Route::middleware(['auth', 'admin'])->group(function(){
    Route::get('/Manage', [ManageProduct::class, 'view']);
    Route::get('/AddProduct', [ManageProduct::class, 'view_add_product']);
    Route::post('/AddProduct', [ManageProduct::class, 'insert']);
    Route::post('/Manage/{id}', [ManageProduct::class, 'delete']);
    Route::get('/Manage/{name}/{id}', [ManageProduct::class, 'view_edit']);
});

Route::middleware('auth')->group(function(){
    Route::get('/Profile', function () {
        return view('Profile', ['title' => 'Profile']);
    });
});
Route::post('/Logout', [Login::class, 'logout'])->middleware('auth');

