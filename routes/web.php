<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\Product;

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

Route::resource('/products', ProductController::class)->names([
    'index' => 'products.index',
    // 'create' => 'posts.create',
    // 'store' => 'posts.store',
    // 'show' => 'posts.show',
    // 'edit' => 'posts.edit',
    // 'update' => 'posts.update',
    // 'destroy' => 'posts.destroy',
]);