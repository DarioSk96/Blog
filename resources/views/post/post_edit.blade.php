@extends('layouts.master')

@section('content')

@include('partials.sidebar')


    <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
        <h1>Edit Posts</h1>
        <div class="col-md-4">
            <form method="post" action="{{ route('post.update',  ['id' =>$post->id]) }}">
                    {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Title</label>
                    <input type="text" class="form-control" id="id_title" name="title"
                    aria-describedby="title" value=" {{$post ->title}}">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="id_description" rows="15" name="description" placeholder="Description">
                        {{ $post -> description }}
                    </textarea>
                </div>
                    <button type="submit" class="btn btn-primary">Update post</button>
            </form>
        </div>
    </main>
@endsection
    