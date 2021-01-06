<div class="mt-5 flex flex-col md:flex-row gap-10">
    @if($posts->count())
        @php
            $firstPost = $posts->first();
        @endphp
        <x-post-item class="flex-1" :post="$firstPost"/>
    @endif
    <div class="flex-1 flex flex-col gap-7">
        @foreach($posts as $post)
            <div class="flex gap-4">
                <div style="width: 200px;">
                    <img src="{{ $post->image }}" alt="">
                </div>
                <div>
                    <p class="font-bold">{{ $post->title }}</p>
                    <p class="text-sm text-gray-600">{{ $post->created_at }}</p>
                    <p>
                        {{ $post->description }}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
</div>
@if($showMore)
<div class="my-6 text-center">
    <a href="{{ $showMore }}" class="bg-green-500 text-white text-base font-semibold py-2 px-4 rounded-md shadow-md hover:bg-green-600"
            type="button">
        Xem thêm
    </a>
</div>
@endif
