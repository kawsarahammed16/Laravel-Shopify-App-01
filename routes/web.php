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
    Route::get( '/collection', [ShopController::class, 'collectionIndex'] )->name( 'collections' );
    Route::post( '/collection', [ShopController::class, 'collectionStore'] )
        ->name( 'collection.save' );
    //Products
    Route::get( '/products', [ShopController::class, 'productsIndex'] )->name( 'products' );
    Route::post( '/products/{collectionid}', [ShopController::class, 'products'] )
        ->name( 'collection.products.save' );
} );