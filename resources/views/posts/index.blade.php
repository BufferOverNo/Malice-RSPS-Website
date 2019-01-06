@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
        <div class="row">
            @foreach($posts as $post)
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title"><a href="/posts/{{$post->id}}">{{ $post->title }}</a></h3>
                            <small>Written on {{ $post->created_at }} by {{ $post->user['name'] }}</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        @if(count($posts) >= 10)
            <hr>
            {{ $posts }}
        @endif
    @else
        <p>No posts found</p>
    @endif
@endsection