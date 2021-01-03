@extends('client.layout')

@section('content')
    <div class="mt-8">
        <div class="container">
            <div class="text-2xl font-bold">
                Tìm thấy <span class="text-red-700">{{ $packages->count() }}</span> sản phẩm phù hợp với nhu cầu của bạn
            </div>

            <div class="grid grid-cols-3 gap-4 mt-10">
                @foreach($packages as $index => $package)
                    <x-package-item :package="$package" :index="$index"/>
                @endforeach
            </div>

    </div>
@endsection
