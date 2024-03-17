@extends('layout.main')
@section('title','Users List')
@section('content')
    <h1>List of Users</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Posts Count</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->posts->count() }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
