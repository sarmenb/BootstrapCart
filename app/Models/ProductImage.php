<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;

    protected $fillable = [
    	'image',
    	'slug',
    	'is_primary'
    ];

    public $timestamps = false;

    public function getRouteKeyName()
	{
		return 'slug';
	}

	public function Product()
	{
		return $this->belongsTo(Product::class);
	}
}
