<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'sku',
        'description',
        'price'
    ];

    public function Category()
    {
    	return $this->belongsTo(Category::class);
    }

    public function Images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function getRouteKeyName()
	{
		return 'slug';
	}
}
