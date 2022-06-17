@extends('layouts.master', ['title' => 'Coupon - Marketplace'])

@section('content')
    <div class="row">
        <div class="col-12 col-lg-8 col-md-8">
            <x-card title="List Coupon">
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Coupon Name</th>
                                <th>Coupon Discount</th>
                                <th>Validity</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($coupons as $i => $coupon)
                                <tr>
                                    <th scope="row">{{ $i + $coupons->firstItem() }}</th>
                                    <td>{{ $coupon->name }}</td>
                                    <td>{{ $coupon->discount }} %</td>
                                    <td>{{ Carbon\Carbon::parse($coupon->validity)->format('D, d F Y') }}</td>
                                    <td>
                                        <span class="badge bg-{{ $coupon->status == 1 ? 'success' : 'danger' }}">
                                            {{ $coupon->status == 1 ? 'Active' : 'Inactive' }}
                                        </span>
                                    </td>
                                    <td>
                                        <x-button-delete :id="$coupon->id" title="Delete" :url="route('admin.coupon.destroy', $coupon->id)" />
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </x-card>
        </div>
        <div class="col-12 col-lg-4 col-md-4">
            <x-card title="Create Coupon">
                <form action="{{ route('admin.coupon.store') }}" method="POST">
                    @csrf
                    <x-input title="Coupon Name" type="text" :value="old('name')" placeholder="" name="name" />
                    <x-input title="Coupon Discount" type="number" :value="old('discount')" placeholder="" name="discount" />
                    <x-input title="Coupon Validity" type="date" :value="old('validity')" placeholder="" name="validity" />
                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                        <i class="fas fa-save me-1"></i> Save
                    </button>
                </form>
            </x-card>
        </div>
    </div>
@endsection
