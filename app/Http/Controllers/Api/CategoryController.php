<?php

namespace App\Http\Controllers\Api;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Category\CategoryLandingResource;

class CategoryController extends Controller
{
    public function landing()
    {
        $categories = Category::with('products')->get();

        return CategoryLandingResource::collection($categories);
    }
}
