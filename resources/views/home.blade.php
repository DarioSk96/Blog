@extends('layouts.master')

@section('content')
<div class="container-fluid">
<div class="row">
    <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
            <ul class="nav nav-pills flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="#">Post<span class="sr-only">(current)</span></a>
            </li>
            </ul>

        <ul class="nav nav-pills flex-column">
            <li class="nav-item">
                <a class="nav-link" href="#">Nav item again</a>
            </li>
        </ul>
    </nav>

    <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
        <h1> Welcome {{Auth::user()-> name}} </h1>
    </main>
</div>
</div>
@endsection
