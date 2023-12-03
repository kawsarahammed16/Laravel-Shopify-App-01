<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{

    public function index()
    {
        $shop        = Auth::user();
        $data        = $shop->api()->rest( 'GET', 'admin/api/2023-10/shop.json' );
        $shopDetails = $data['body']['shop'];
        return view( 'shop', compact( 'shopDetails' ) );
    }

    public function collectionsIndex()
    {

        $shop = Auth::user();
        $data = $shop->api()->rest( 'GET', '/admin/api/2023-10/collects.json' );

        return view( 'collections.index', compact( 'data' ) );
    }
}