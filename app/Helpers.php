<?php 

function getCartItems()
{
	return Session::get('store.cart');
}

function getCartSubTotal()
{
	if(Session::has('store.cart'))
	{
		$total = 0;
		$cartItems = Session::get('store.cart');

		foreach($cartItems as $item)
		{
			$total += $item['total'];
		}

		return $total;
	}
	return 0;
}


function calculateMiniCart($tax=0, $shipping=0)
{
	$subtotal = getCartSubTotal();
	$tax = ($tax * getCartSubTotal()) / 100;

	$data = [
		'subtotal' => getCartSubTotal(),
		'tax' => $tax,
		'shipping' => $shipping,
		'total' => $subtotal + $tax + $shipping
	];

	return $data;
}


function basketPreview()
{
	$cart = session()->get('store.cart');
	$basket = array_slice($cart, 0, 3);
	return $basket;
}