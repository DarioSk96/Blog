@extends('layouts.master')

@section('title')
    Dobro dosli na blog!

@endsection

@section('content')

    <main role="main" class="container" style="margin-top:5px">

    <div class="row">
    <div class="col-sm-8 blog-main">
    <div class="blog-post">
    <h2 class="blog-post-title">Posts One</h2>
    <p class="blog-post-meta"><small><i>December 23,2013 by<a href="#">Dario</a><i></small></p>

    <p>Tekst članka...<a href="#">Kliknite za više</a></p>
    <blockquote>
        <p>Jos teksta...<a href="" class="btn btn-primary btn-sm">Learn more</a></p>
    </blockquote>
    </div>

    <div class="blog-post">
    <h2 class="blog-post-title">Posts Two</h2>
    <p class="blog-post-meta"><small><i>December 23,2013 by<a href="#">Mario</a><i></small></p>

    <p>Tekst članka...<a href="#">Kliknite za više</a></p>
    <blockquote>
        <p>Jos teksta...<a href="" class="btn btn-primary btn-sm">Learn more</a></p>
    </blockquote>
    </div>

    <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    </nav>

    <aside class="col-sm-3 ml-sm-auto blog-sidebar">
        <div class="sidebar-module">
        <h4>Latest Posts</h4>
        <ol class="list-unstyled">
        <li><a href="#">March 2019</a>
        <li><a href="#">February 2019</a>
        <li><a href="#">Januray 2019</a>
        </ol>
        </div>

    <div class="list-unstyled">
    <h4>Elsewhere</h4>
    <ol class="list-unstyled">
        <li><a href="#">GitHUb</a>
        <li><a href="#">Twiter</a>
        <li><a href="#">Facebook</a>
        </ol>
        </div>
    </aside>
    </div>
    </main>

@endsection