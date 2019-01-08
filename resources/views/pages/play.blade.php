@extends('layouts.app')
@section('header')
    @include('inc.header')
@endsection
@section('content')
    <div class="jumbotron">
        <h1>{{ $title }}</h1>
        <p>This is the OutLawz-RS Homepage</p>
        <p>
            <a class="btn btn-primary btn-lg" href="{{ urldecode($downloads['launcher']) }}" role="button">Download Launcher</a>
        </p>
    </div>
@endsection