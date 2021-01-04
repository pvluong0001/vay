@extends('client.layout')

@section('content')
    @if($category->prefix_template)
        @include('client.static_template.' . $category->prefix_template)
    @endif

    <div data-type="anchor" data-label="Sản phẩm vay tiền nhanh">
        <div class="container">
            <div class="text-2xl font-bold pt-7">
                Tìm thấy <span class="text-red-700">{{ $packages->count() }}</span> sản phẩm phù hợp với nhu cầu của bạn
            </div>

            <div class="grid grid-cols-3 gap-4 mt-10">
                @foreach($packages as $index => $package)
                    <x-package-item :package="$package" :index="$index"/>
                @endforeach
            </div>
        </div>
    </div>

    @if($category->suffix_template)
        @include('client.static_template.' . $category->suffix_template)
    @endif
@endsection

@push('after_scripts')
<script src="{{ mix('js/category.js') }}"></script>
@endpush
