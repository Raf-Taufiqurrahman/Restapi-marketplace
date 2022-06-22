@extends('layouts.master', ['title' => 'Stock Product - Marketplace'])

@section('content')
    <div class="row">
        <div class="col-12">
            <x-card title="Stock Product">
                <table id="scroll-vertical-datatable" class="table dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Stock</th>
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
                                <td>{{ $product->stock }}</td>
                                <td>
                                    <x-button-modal-center :id="$product->id" title="Add Stock" />
                                    <x-modal-center :id="$product->id" title="Add Stock">
                                        <form action="{{ route('admin.stock.update', $product->id) }}" method="POST">
                                            @csrf @method('PUT')
                                            <x-input title="Stock" type="number" :value="$product->stock" placeholder=""
                                                name="stock" />
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                <i class="fas fa-save me-1"></i> Update
                                            </button>
                                        </form>
                                    </x-modal-center>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </x-card>
        </div>
    </div>
@endsection
