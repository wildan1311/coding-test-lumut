
@extends('layouts.master')


@section('content')
<a href="{{route('account.edit', $account->username)}}" class="btn btn-primary d-inline">Update</a>
<form action="{{route('account.destroy', $account->username)}}" class=" d-inline" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
<table class="table table-stripped table-full">
    <tr>
        <td>Username</td>
        <td>{{$account->username}}</td>
    </tr>
    <tr>
        <td>Name</td>
        <td>{{$account->name}}</td>
    </tr>
    <tr>
        <td>Role</td>
        <td>{{$account->role}}</td>
    </tr>
</table>
@endsection
