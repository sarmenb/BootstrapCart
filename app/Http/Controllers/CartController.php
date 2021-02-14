<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;

use Session;

class CartController extends Controller
{

    public function index()
    {
        if(session()->has('store.cart'))
        {
            return view('guest.cart', [
                'cartItems' => Session::get('store.cart'),
                'cartSubTotal' => getCartSubTotal(),
                'cartShipping' => 0,
                'cartTaxes' => 0,
                'cartTotal' => getCartSubTotal()
            ]);
        }
        else
        {
            //remove all sessions redirect back to home
            session()->forget('store.cart');

            return redirect()->route('guest.index');
        }
    }

    public function cartEmpty(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
    }


    public function addCart(Request $request, $slug)
    {
    		if(session()->has('store.cart'))
    		{
    			$cart = session()->pull('store.cart');
    			if(isset($cart[$slug]))
    			{
    				$cart[$slug]['quantity'] = $request->quantity;

    				//set field total
    				$cart[$slug]['total'] = $cart[$slug]['price'] * $cart[$slug]['quantity'];
    				session()->put('store.cart', $cart);
    			}
    			else
    			{
    				$cart[$slug] = $this->createCart($request->quantity, $slug);
    				session()->put('store.cart', $cart);
    			}
    		}
    		else
    		{
    			$cart[$slug] = $this->createCart($request->quantity, $slug);
    			session()->put('store.cart', $cart);
    		}

    		flash('item has been added to the cart')->success();
    		return back();
    }


 


    //get default image of product
    public function defaultImage($product_id)
    {
    	$result = ProductImage::where('product_id', $product_id)
    					->where('is_primary', 1)
    					->first();

    	return $result->image;

    }


    //create cart array
    public function createCart($quantity, $product_slug)
    {
    	$product = Product::where('slug', $product_slug)->first();

    	$cart = [
            'product_slug' => $product->slug,
			'product_id' => $product->id,
			'image' => $this->defaultImage($product->id),
			'name' => $product->name,
			'price' => $product->price,
			'quantity' => $quantity,
			'total' => $quantity * $product->price
    	];

    	return $cart;
    }
}
