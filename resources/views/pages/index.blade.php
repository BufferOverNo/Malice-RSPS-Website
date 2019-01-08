@extends('layouts.app')
@section('header')
    @include('inc.header')
@endsection
@section('content')
    <div class="jumbotron">
        <h1>{{ $data['title'] }}</h1>
        <p>This is the OutLawz-RS Homepage</p>
        @if(Auth::guest())
            <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
            <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
        @else
            <a class="btn btn-primary btn-lg" href="/posts/create" role="button">Create Post</a>
            <a class="btn btn-success btn-lg" href="/dashboard" role="button">Visit Dashboard</a>
        @endif
    </div>
    <div class="jumbotron">
        <div class="features">
            <h2>A list of some of our features...</h2>
            @if(count($data) > 0)
                <div class="bd-example">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        </ol>
                        @foreach($data['features'] as $feature)
                        <div class="carousel-inner" role="listbox">
                                <div class="carousel-item">
                                    <div class="carousel-caption d-none d-md-block">
                                        {{ $feature }}
                                    </div>
                                </div>
                        </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            @endif
        </div>
    </div>
@endsection