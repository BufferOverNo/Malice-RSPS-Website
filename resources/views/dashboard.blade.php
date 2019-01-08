@extends('layouts.app')
@section('header')
    @include('inc.dash-header')
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#blogs">Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu1">User Panel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu2">Menu 2</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane container active" id="blogs">
                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <a href="/posts/create" class="btn btn-primary">Create Post</a>
                                <h2>Your blog posts</h2>
                                @if(count($data['posts']) > 0)
                                    <table class="table table-striped">
                                        <tr>
                                            <th>Title</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        @foreach($data['posts'] as $post)
                                            <tr>
                                                <td>{{ $post->title }}</td>
                                                <td><a class="btn btn-primary" href="/posts/{{$post->id}}/edit">Edit</a></td>
                                                <td>
                                                    {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                                    {{ Form::hidden('_method', 'DELETE') }}
                                                    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                                    {!! Form::close() !!}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                @else
                                    <p>You have no posts</p>
                                @endif
                            </div>
                        </div>
                        <div class="tab-pane container fade" id="menu1">
                            <div class="card-body">
                                <h2>Here you can edit your personal information, such as name, password, and email and other things!</h2>
                                <a href="/user" class="btn btn-primary">Visit user panel</a>
                            </div>
                        </div>
                        <div class="tab-pane container fade" id="menu2">...</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
