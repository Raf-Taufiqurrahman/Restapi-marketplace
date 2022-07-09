@extends('layouts.master', ['title' => 'Customer - Marketplace'])

@section('content')
    <div class="row">
        <div class="col-12">
            <x-card title="List Customer">
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Foto</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Join</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customers as $i => $customer)
                                <tr>
                                    <th scope="row">{{ $i + $customers->firstItem() }}</th>
                                    <td>
                                        <img src="{{ $customer->avatar }}" alt="{{ $customer->name }}"
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
