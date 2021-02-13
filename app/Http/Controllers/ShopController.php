<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Product;

class ShopController extends Controller
{
    public function index()
    {
    	return view('guest.shop', [
    		'categories' => Category::all(),
    		'products' => Product::paginate(10)
    	]);
    }

    public function productByCategory($category_slug)
    {
    	$category = Category::where('slug', $category_slug)->first();
    	$products = Product::where('category_id', $category->id)->paginate(10);

    	return view('guest.shop', [
    		'categories' => Category::all(),
    		'products' => $products
    	]);
    }










}

