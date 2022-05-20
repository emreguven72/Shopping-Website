<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Node\Builder;

class CartController extends Controller
{
    public function showCart()
    {
        $cart_products = Product::whereIn('id', function ($query) {
            $query->select('product_id')
                ->from('carts')
                ->where('user_id', auth()->user()->id);
        })->get();
        $cart_total_price = 0;

        $cart_total_price = Product::whereIn('id', function ($query) {
            $query->select('product_id')
                ->from('carts')
                ->where('user_id', auth()->user()->id);
        })->sum('price');

        return view('cart', compact('cart_products','cart_total_price'));
    }

    public function addToCart($product_id)
    {
        if(!Cart::where('product_id', $product_id)->exists())
        {
            Cart::create([
                'user_id' => auth()->user()->id,
                'product_id' => $product_id,
            ]);
            $message = 'Seçtiğiniz ürün sepetinize eklendi.';
        } else {
            $message = 'Seçtiğiniz ürün zaten sepetinize ekli.';
        }
        return redirect()->back()->with('message', $message);
    }

    public function deleteProduct($product_id)
    {
        Cart::where('product_id', $product_id)->delete();
        return redirect()->back()->with('message', 'Ürün sepetinizden silindi.');
    }

    public function deleteAllProducts()
    {

    }
}
