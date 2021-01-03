@extends('client.layout')

@section('content')
    <div class="mt-8">
        <div class="container grid grid-cols-3 gap-4">
            @foreach($posts as $post)
                <x-post-item :post="$post"/>
            @endforeach
        </div>
    </div>
@endsection
