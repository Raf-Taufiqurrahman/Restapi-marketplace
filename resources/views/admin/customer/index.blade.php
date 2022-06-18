@extends('layouts.master', ['title' => 'Category - Marketplace'])

@section('content')
    <div class="row">
        <div class="col-12">
            <x-card title="List Customer">
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Customer Image</th>
                                <th>Customer Name</th>
                                <th>Customer Email</th>
                                <th>Customer Join</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customers as $i => $customer)
                                <tr>
                                    <th scope="row">{{ $i + $customers->firstItem() }}</th>
                                    <td>
                                        <img src="{{ $customer->image }}" alt="{{ $customer->name }}"
                                            class="rounded avatar-sm">
                                    </td>
                                    <td>{{ $customer->name }}</td>
                                    <td>{{ $customer->email }}</td>
                                    <td>{{ $customer->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </x-card>
        </div>
    </div>
@endsection
