@extends('layouts.master', ['title' => 'Add Product - Marketplace'])

@section('content')
    <div class="row">
        <div class="col-12">
            <x-card title="Add Product">
                <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <x-input title="Name" type="text" name="name" placeholder="" :value="old('name')" />
                        </div>
                        <div class="col-6">
                            <x-select name="category_id" title="Category">
                                <option value>Choose Category Product</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </x-select>
                        </div>
                        <div class="col-6">
                            <x-input title="Weight (kg)" type="number" name="weight" placeholder="" :value="old('weight')" />
                        </div>
                        <div class="col-6">
                            <x-input title="Price" type="number" name="price" placeholder="" :value="old('price')" />
                        </div>
                        <div class="col-6">
                            <x-input title="Discount" type="number" name="discount" placeholder="" :value="old('discount')" />
                        </div>
                        <div class="col-12">
                            <x-input title="Image" type="file" name="image" placeholder="" :value="old('image')" />

                        </div>
                        <div class="col-12">
                            <x-textarea title="Description" name="description"></x-textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                        <i class="fas fa-save me-1"></i> Save
                    </button>
                </form>
            </x-card>
        </div>
    </div>
@endsection
