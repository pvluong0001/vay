<div data-type="anchor" data-label="Hướng dẫn cầm đồ online">
    <x-block title="Hướng dẫn cầm đồ online">
        <div class="knowledge-slide mt-8">
            <div class="swiper-wrapper">
                @foreach($posts as $post)
                    <div class="swiper-slide">
                        <a href="{{ route('post.detail', ['slug' => $post->slug, 'post' => $post->id]) }}"><img src="{{ $post->image }}" alt=""></a>
                        <h5 class="mt-2 font-bold text-md">
                            <a href="{{ route('post.detail', ['slug' => $post->slug, 'post' => $post->id]) }}">{{ $post->title }}</a>
                        </h5>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="mt-16 flex justify-center">
            <!-- If we need pagination -->
            <div class="swiper-pagination flex gap-4"></div>
        </div>
    </x-block>
</div>

<div>
    <x-block title="Kiến thức cầm đồ online">
        <x-block-post :posts="$posts->take(3)" showMore="{{ route('type', ['type' => $type->slug]) }}"/>
    </x-block>
</div>
