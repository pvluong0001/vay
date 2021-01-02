@extends('client.layout')

@section('content')
    <div class="mt-8">
        <div class="container">
            <div class="font-bold text-2xl">
                {{ $post->title }}
            </div>
            <div class="text-gray-700 text-sm">
                {{ $post->created_at }}
            </div>
            <div class="mt-8 content">
                {!! $post->content !!}
            </div>
        </div>
    </div>
@endsection
