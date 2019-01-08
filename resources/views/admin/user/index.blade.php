@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $user->name }}'s Profile</div>
                    <div class="card-body">
                        <p>Hi {{ $user->name }}, welcome to the OutLawz User Panel!</p>
                        <p>Here you can find some useful tools for your user account, such as updating your details, payment method for donating, etc.</p>
                        <a href="/user/show" class="btn btn-primary">Show user info</a>
                        <a href="/user/edit" class="btn btn-primary">Edit user info</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection