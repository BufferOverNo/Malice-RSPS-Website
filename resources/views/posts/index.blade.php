@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    <div class="row">
        @forelse($posts as $post)
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title"><a href="/posts/{{$post->id}}">{{ $post->title }}</a></h3>
                        <small>Written on {{ $post->created_at }} by {{ $post->user['name'] }}</small>
                    </div>
                </div>
            </div>
        @empty
            <p>No posts found</p>
        @endforelse
    </div>
    @if(count($posts) >= 2)
        <hr>
        {{ $posts }}
    @endif
@endsection