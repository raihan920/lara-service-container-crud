@extends('layouts.main')
@section('content')
    <div class="container">
        <h1 class="text-center">List of Users</h1>

        <table class="table">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Address</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->address }}</td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
