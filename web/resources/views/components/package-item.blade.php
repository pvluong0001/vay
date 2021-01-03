<div class="shadow-md p-3 relative">
    <div class="relative panel-flag">
        <div class="panel-label">
            <span class="panel-label-text">TOP #{{ $index + 1 }} tốt nhất</span>
            <br>
            <span class="triangle-right"></span></div>
    </div>
    <div style="width: 137px;" class="mt-6">
        <img src="{{ $package->image }}" alt="">
    </div>
    <div class="absolute top-0 right-0 w-12">
        <img src="assets/new.png" alt="">
    </div>
    <div class="font-semibold mt-3">
        {{ $package->title }}
    </div>
    <div class="text-red-400 text-sm mt-1">
        {{ $package->subtitle }}
    </div>
    <div class="flex mt-2">
        <div class="flex-1 text-center">
            <p class="font-bold">Khoản vay</p>
            <p class="text-5xl mt-2 font-bold text-blue-800">{{ $package->range_borrow }}</p>
            <p class="mt-2 font-semibold">triệu</p>
        </div>
        <div class="flex-1 text-center">
            <p class="font-bold">Lái suất</p>
            <p class="text-5xl mt-2 font-bold text-blue-800">{{ $package->interest_rate }} %</p>
            <p class="mt-2 font-semibold">năm</p>
        </div>
    </div>
    <div class="mt-2 description">
        {!! $package->description !!}
    </div>
    @if($package->post_id)
        <div class="mt-4">
            <a href="{{ route('post.detail', ['slug' => $package->post->slug, 'post' => $package->post->id]) }}" class="text-underline text-blue-700">Tìm hiểu thêm</a>
        </div>
    @endif
    <div class="mt-2">
        <a href="{{ $package->register_link ? $package->register_link : '#' }}" class="block bg-green-500 text-white text-base font-semibold py-2 px-4 rounded-sm shadow-md hover:bg-green-600 cursor-pointer uppercase text-center">
            Đăng ký vay ngay
        </a>
    </div>
</div>
