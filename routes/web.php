<?php

use App\Http\Controllers\OrderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('OrderTestPage', [
        'title' => 'Home Page.'
    ]);
});

Route::get('/order/create', [OrderController::class, 'index']);
Route::post('/order/create', [OrderController::class, 'setOrder']);

// Route::resource('order', OrderController::class);

