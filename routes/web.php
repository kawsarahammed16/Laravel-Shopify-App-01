<?php

use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

Route::get( '/', function () {
    return view( 'welcome' );
} )->middleware( ['verify.shopify'] )->name( 'home' );
// Route::get( '/shop', [ShopController::class, 'index'] )->middleware( ['verify.shopify'] )->name( 'home' );

Route::middleware( ['verify.shopify'] )->group( function () {
    // Shop Details
    Route::get( '/shop', [ShopController::class, 'index'] )->name( 'home' );

    //Collections
    Route::get( '/collections', [ShopController::class, 'collectionsIndex'] )->name( 'collections' );
} );