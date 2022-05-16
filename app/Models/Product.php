<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $fillable = ['product_name'];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_category', 'category_id', 'product_id');
    }

    public function carts()
    {
        return $this->belongsToMany(Cart::class, 'cart_product', 'cart_id', 'product_id');
    }
}
