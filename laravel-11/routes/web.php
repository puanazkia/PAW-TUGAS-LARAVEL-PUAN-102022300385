<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route ::get('/blog', function (){
    return 'hello world';
});

use App\Http\Controllers\ProdukController;

Route::get('/produk', [ProdukController::class, 'index']);

