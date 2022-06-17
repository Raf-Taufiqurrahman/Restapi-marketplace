@extends('layouts.master', ['title' => 'Product - Marketplace'])

@section('content')
    <div class="row">
        <div class="col-12">
            <a href="{{ route('admin.product.create') }}" class="btn btn-success mb-3 waves-effect waves-light">
                <i class="fas fa-plus-circle me-1"></i> Add Product
            </a>
            <x-card title="Product">
                <table id="scroll-vertical-datatable" class="table dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Discount</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $i => $product)
                            <tr>
                                <td>{{ $i + 1 }}</td>
                                <td>
                                    <img src="{{ $product->image }}" alt="{{ $product->name }}" class="rounded avatar-sm">
                                </td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->category->name }}</td>
                                <td>{{ moneyFormat($product->price) }}</td>
                                <td>{{ moneyFormat($product->discount) }}</td>
                                <td>
                                    <a href="{{ route('admin.product.edit', $product->id) }}"
                                        class="btn btn-info waves-effect waves-light btn-sm">
                                        <i class="fas fa-edit me-1"></i> Edit
                                    </a>
                                    <x-button-delete :id="$product->id" title="Delete" :url="route('admin.product.destroy', $product->id)" />
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </x-card>
        </div>
    </div>
@endsection
