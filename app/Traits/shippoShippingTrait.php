<?php

namespace App\Traits;

use Illuminate\Http\Request;

use Shippo;
use Shippo_Address;
use Shippo_Shipment;
use Shippo_Transaction;

Trait ShippoShippingTrait
{

	public function __construct()
	{
		Shippo::setApiKey(env('SHIPPO_PRIVATE'));
	}

	/**
     * Validate From Address
     *
     */
	public function validateShippingAddress($toAddress)
	{
		Shippo::setApiKey(env('SHIPPO_PRIVATE'));
		$toAddress['validate'] = true;
		$results = Shippo_Address::create($toAddress);

		if($results->validation_results->is_valid)
		{
			return true;
		}
		return false;
	}

	/**
     * Get Shipping Rates
     *
     */
	public function getRates($fromAddress, $toAddress, $totalProductWeights)
	{
		Shippo::setApiKey(env('SHIPPO_PRIVATE'));
		$toAddress['object_purpose'] = 'PURCHASE';
		$fromAddress['object_purpose'] = 'PURCHASE';

		$parcel = [
			'length' => 5,
			'width' => 5,
			'height' => 5,
			'distance_unit' => 'in',
			'weight' => $totalProductWeights,
			'mass_unit' => 'lb'
    	];

		$rates = Shippo_Shipment::create([
			'object_purpose' => 'PURCHASE',
			'address_from' => $fromAddress,
			'address_to' => $toAddress,
			'parcels' => array($parcel), //must be an array
			'insurance_amount' => 0,
			'insurance_currency' => 'USD',
			'async' => false
		]);

		return $rates;
	}

	public function getShippingRates($object_id)
	{
		Shippo::setApiKey(env('SHIPPO_PRIVATE'));
		$rates = Shippo_Shipment::get_shipping_rates([
			'id' => $object_id
		]);

		return $rates; 
	}

	/**
     * Create Shipping Label
     *
     */
	public function createShippingLabel($rateID)
	{
		Shippo::setApiKey(env('SHIPPO_PRIVATE'));
		$label = Shippo_Transaction::create([
			'rate' => $rateID,
			'label_file_type' => 'PDF',
			'async' => false
		]);

		return $label;
	}
}