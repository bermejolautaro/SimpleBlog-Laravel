@extends('layouts.app')
@section('content')
    @include('component.header')
    <div class="container">
        @if(count($posts) > 0)
            @foreach($posts as $post)
                <div class="card my-3">
                    <div class="card-body">
                        <h2 class="card-title"><a href="/posts/{{$post->id}}">{{ $post->title }}</a></h2>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $post->created_at}}</h6>
                        <p class="card-text">{{ substr($post->body, 0, 100).' [...]'}}.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            @endforeach
            {{$posts->links()}}
        @else
            <p>No post found</p>
        @endif
    </div>
@endsection
