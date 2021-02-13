<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class GuestController extends Controller
{
    public function index()
    {
    	//return session()->get('store.cart');
    	return view('guest.index', [
    		'products' => Product::where('is_featured', 1)->get()
    	]);
    }

    public function productDetail($slug)
    {
    	return view('guest.product-detail', [
    		'product' => Product::where('slug', $slug)->first()
    	]);
    }
}
