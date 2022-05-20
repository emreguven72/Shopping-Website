<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($category_name)
    {
        $category = Category::where('category_name', $category_name)->first();
        $products = $category->products()->orderBy('price', 'asc')->get();
        return view('products', compact('products', 'category_name'));
    }
}
