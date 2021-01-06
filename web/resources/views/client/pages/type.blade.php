@extends('client.layout')

@section('content')
    <div class="mt-8">
        <div class="container grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($posts as $post)
                <x-post-item :post="$post"/>
            @endforeach
        </div>
    </div>
@endsection
