<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Http\Resources\ProductShowResource;
use App\Http\Resources\ProductLandingResource;

class ProductController extends Controller
{
    public function landing()
    {
        $products = Product::with('category')->limit(6)->get();

        return ProductLandingResource::collection($products);

    }

    public function index()
    {
        $products = Product::with('category')->paginate(10);

        return ProductResource::collection($products);
    }

    public function show($slug)
    {
        $product = Product::with('category')->where('slug', $slug)->first();

        return new ProductShowResource($product);
    }
}
