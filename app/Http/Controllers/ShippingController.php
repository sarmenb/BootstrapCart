<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ShippoShippingTrait;

class ShippingController extends Controller
{
	use ShippoShippingTrait;

	public function __construct()
	{
		if(!session()->has('store.cart'))
		{
			return redirect('/');
		}
	}


    public function Address()
    {
    	return view('guest.checkout.address', [
			'subtotal' => getCartSubTotal(),
			'shipping' => 0,
			'tax' => 0,
			'total' => getCartSubTotal()
    	]);
    }

    public function AddressPost(Request $request)
    {
    	$this->validate($request, [
    		'billing_name' => 'required',
    		'billing_address' => 'required',
    		'billing_city' => 'required',
    		'billing_state' => 'required',
    		'billing_zipcode' => 'required',
    		'billing_country' => 'required'
    	]);

    	//billing information
    	$BillingTo = [
    		'name' => $request->billing_name,
    		'street1' => $request->billing_address,
    		'street2' => $request->billing_address2,
    		'city' => $request->billing_city,
    		'state' => $request->billing_state,
    		'zip' => $request->billing_zipcode,
    		'country' => $request->billing_country
    	];

    	//shipping information
    	if($request->has('billing_shipping') AND $request->billing_shipping == 1)
    	{
    		//shipping information
    		$ShippingTo = [
	    		'name' => $request->billing_name,
	    		'street1' => $request->billing_address,
	    		'street2' => $request->billing_address2,
	    		'city' => $request->billing_city,
	    		'state' => $request->billing_state,
	    		'zip' => $request->billing_zipcode,
	    		'country' => $request->billing_country
    		];
    	}
    	else
    	{
    		$this->validate($request, [
	    		'shipping_name' => 'required',
	    		'shipping_address' => 'required',
	    		'shipping_city' => 'required',
	    		'shipping_state' => 'required',
	    		'shipping_zipcode' => 'required',
	    		'shipping_country' => 'required'
    		]);

    		$ShippingTo = [
				'name' => $request->shipping_name,
				'street1' => $request->shipping_address,
				'street2' => $request->shipping_address2,
				'city' => $request->shipping_city,
				'state' => $request->shipping_state,
				'zip' => $request->shipping_zipcode,
				'country' => $request->shipping_country
    		];
    	}

    	$address = [
    		'billing' => $BillingTo,
    		'shipping' => $ShippingTo
    	];

    	session()->put('store.address', $address);

    	return redirect()->route('guest.checkout.shipping');
    }

    public function Shipping()
    {
        if(!session()->has('store.cart'))
        {
            return redirect('/');
        }
    	$shipping = session()->get('store.address');
    	$shippingTo = $shipping['shipping'];

    	if($this->validateShippingAddress($shippingTo))
    	{
    		//address is valid
    		$fromAddress = $this->getFromAddress();
    		$rates = $this->getRates($fromAddress, $shippingTo, 100);

    		if($rates->status == 'SUCCESS')
    		{
    			//rates came through
                $cart['subtotal'] = getCartSubTotal();
                $cart['shipping'] = 0;
                $cart['tax'] = (7.25 * getCartSubTotal()) / 100;
                $cart['total'] = $cart['subtotal'] + $cart['shipping'] + $cart['tax'];
                
    			return view('guest.checkout.shipping', [
                                'rates' => $rates->rates,
                                'subtotal' => $cart['subtotal'],
                                'shipping' => $cart['shipping'],
                                'tax' => $cart['tax'],
                                'total' => $cart['total']
    			         ]);


    		}
    	}	
    	else
    	{
    		//address is not valid
    		return 'the address you entered is not valid';
    	}
    }


    public function ShippingPost(Request $request)
    {   
        $method = $request->shippingMethod;

        session()->put('store.shipping', [
            'object_id' => $request->shippingMethod,
            'rate' => request('rate_' . $method),
            'service' => request('service_' . $method)
        ]);

        return redirect()->route('guest.checkout.payment');
    }


    public function getFromAddress()
    {
    	$address = [
    		'name' => 'sarmen boyadjian',
    		'street1' => '1306 North Columbus Ave',
    		'street2' => 'apt 315',
    		'city' => 'glendale',
    		'state' => 'ca',
    		'zip' => '91202',
    		'country' => 'usa',
    	];

    	return $address;
    }
}
