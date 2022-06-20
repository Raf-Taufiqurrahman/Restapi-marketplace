@extends('layouts.master', ['title' => 'Slider - Marketplace'])

@section('content')
    <div class="row">
        <div class="col-12 col-lg-8 col-md-8">
            <x-card title="Slider">
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sliders as $i => $slider)
                                <tr>
                                    <th scope="row">{{ $i + $sliders->firstItem() }}</th>
                                    <td>
                                        <img src="{{ $slider->image }}" alt="slider" class="rounded avatar-sm">
                                    </td>
                                    <td>
                                        <x-button-delete :id="$slider->id" title="Delete" :url="route('admin.slider.destroy', $slider->id)" />
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </x-card>
        </div>
        <div class="col-12 col-lg-4 col-md-4">
            <x-card title="Create Slider">
                <form action="{{ route('admin.slider.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <x-input title="Image" type="file" :value="old('image')" placeholder="" name="image" />
                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                        <i class="fas fa-save me-1"></i> Save
                    </button>
                </form>
            </x-card>
        </div>
    </div>
@endsection
