<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Laravel\Cashier\Cashier;

class PaymentController extends Controller
{
    public function index()
    {
    	$shipping = session()->get('store.shipping');
        $tax = ((7.25 * getCartSubTotal()) / 100);
        $subtotal = getCartSubTotal();

    	return view('guest.checkout.payment', [
			'subtotal' => $subtotal,
			'shipping' => $shipping['rate'],
			'tax' => $tax,
			'total' => $subtotal + $shipping['rate'] + $tax
    	]);
    }

    public function indexPost(Request $request)
    {

    }
}
