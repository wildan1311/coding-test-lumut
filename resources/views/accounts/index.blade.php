@extends('layouts.master')


@section('content')
<h1>Account</h1>
<a href="{{route('account.create')}}" class="btn btn-success">Create Account</a>
<table class="table table-stripped table-full">
    <thead>
        <tr>
            <td>#</td>
            <td>Username</td>
            <td>Name</td>
            <td>Role</td>
            <td></td>
        </tr>
    </thead>
    <tbody>
        @foreach ($accounts as $account)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$account->username}}</td>
                <td>{{$account->name}}</td>
                <td>{{$account->role}}</td>
                <td>
                    <a href="{{route('account.edit', $account->username)}}" class="btn btn-primary d-inline">Edit</a>
                    <a href="{{route('account.show', $account->username)}}" class="btn btn-secondary d-inline">Detail</a>
                    <form action="{{route('account.destroy', $account->username)}}" class="d-inline" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
