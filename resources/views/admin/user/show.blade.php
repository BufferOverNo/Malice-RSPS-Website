@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Your details</div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Ingame Username</th>
                            </tr>
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->username }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection