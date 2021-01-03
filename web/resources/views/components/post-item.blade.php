<div class="{{ $class }}">
    <img src="{{ $post->image }}" alt="">
    <p class="font-bold">{{ $post->title }}</p>
    <p class="text-sm text-gray-600">{{ $post->created_at }}</p>
    <p>
        {{ $post->description }}
    </p>
</div>
