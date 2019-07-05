@extends('layouts.master')

@section('content')

@include('partials.sidebar')

    <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
            <h1>{{ $post->title }}</h1>
                <div class="col-sm-8 blog-main">
                    <p>{{ $post-> description}}</p>
                </div>

        <a href="{{ route('post.edit', ['id' =>$post->id]) }}">
            <button type="button" class="btn btn-warning btn-sm">Update Post</button>
        </a>

        <a href="{{ route('post.delete', ['id' =>$post->id]) }}">
            <button type="button" class="btn btn-danger btn-sm">Delete Post</button>
        </a>

    </main>

@endsection
    
