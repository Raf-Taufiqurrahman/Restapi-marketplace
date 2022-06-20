<?php

namespace App\Http\Controllers\Admin;

use App\Traits\Image;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;

class SliderController extends Controller
{
    use Image;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::paginate(10);

        return view('admin.slider.index', compact('sliders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SliderRequest $request)
    {
        $image = $this->uploadImage($request, $name = 'image', $path = 'public/sliders/');

        Slider::create([
            'image' => $image->hashName(),
        ]);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();

        return back();
    }
}
