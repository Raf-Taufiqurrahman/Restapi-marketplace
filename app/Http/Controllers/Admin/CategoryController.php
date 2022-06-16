<?php

namespace App\Http\Controllers\Admin;

use App\Traits\Image;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    use Image;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::search('name')->latest()->paginate(10);

        return view('admin.category.index', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $image = $this->uploadImage($request, $name = 'image', $path = 'public/categories/');

        Category::create([
            'name' => $request->name,
            'image' => $image->hashName(),
        ]);

        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $image = $this->uploadImage($request, $name = 'image', $path = 'public/categories/', );

        $category->update([
            'name' => $request->name,
        ]);

        if($request->file($name)){
            $this->updateImage(
                $path, $name = 'image', $data = $category, $url = $image->hashName()
            );
        }

        return back()->with('toast_success', 'Kategori Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();

        Storage::disk('local')->delete('public/categories/'. basename($category->image));

        return back();
    }
}
