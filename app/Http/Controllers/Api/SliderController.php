<?php

namespace App\Http\Controllers\Api;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\SliderResource;

class SliderController extends Controller
{
    public function landing()
    {
        $sliders = Slider::latest();

        return SliderResource::collection($sliders);
    }
}
