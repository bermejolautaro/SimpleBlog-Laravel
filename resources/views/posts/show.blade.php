@extends('layouts/app')
@section('content')
    <div class="container my-5">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>
        <hr>
        <div class="row justify-content-end">
            <a href="/posts/{{ $post->id }}/edit" class="btn btn-primary mx-1">Edit</a>
            {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'mx-1']) !!}
            {{ Form::hidden('_method', 'DELETE')}}
            {{ Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!! Form::close() !!}
        </div>
    </div>

@endsection
