@extends('client.layout')

@section('content')
    <div class="mt-8">
        <div class="container">
            <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach($posts as $post)
                    <x-post-item :post="$post"/>
                @endforeach
            </div>
            <div class="flex flex-row-reverse mt-5">
                {{ $posts->links('client.pagination.tailwind') }}
            </div>
        </div>
    </div>
@endsection
