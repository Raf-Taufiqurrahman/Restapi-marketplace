@extends('layouts.master', ['title' => 'Category - Marketplace'])

@section('content')
    <div class="row">
        <div class="col-12 col-lg-8 col-md-8">
            <x-card title="Category">
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $i => $category)
                                <tr>
                                    <th scope="row">{{ $i + $categories->firstItem() }}</th>
                                    <td>
                                        <img src="{{ $category->image }}" alt="{{ $category->name }}"
                                            class="rounded avatar-sm">
                                    </td>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        <x-button-modal-center :id="$category->id" title="Edit" />
                                        <x-modal-center :id="$category->id" title="Edit Category {{ $category->name }}">
                                            <form action="{{ route('admin.category.update', $category->id) }}"
                                                method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <x-input title="Name" type="text" :value="$category->name" placeholder=""
                                                    name="name" />
                                                <x-input title="Image" type="file" :value="$category->image" placeholder=""
                                                    name="image" />
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                    <i class="fas fa-save me-1"></i> Update
                                                </button>
                                            </form>
                                        </x-modal-center>
                                        <x-button-delete :id="$category->id" title="Delete" :url="route('admin.category.destroy', $category->id)" />
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </x-card>
        </div>
        <div class="col-12 col-lg-4 col-md-4">
            <x-card title="Create Category">
                <form action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <x-input title="Name" type="text" :value="old('name')" placeholder="" name="name" />
                    <x-input title="Image" type="file" :value="old('image')" placeholder="" name="image" />
                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                        <i class="fas fa-save me-1"></i> Save
                    </button>
                </form>
            </x-card>
        </div>
    </div>
@endsection
