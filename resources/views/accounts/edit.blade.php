@extends('layouts.master')

@section('content')
<h1>Edit Account</h1>
<form action="{{route('account.update', $account->username)}}" method="POST">
    @csrf
    @method('PUT')
    <label for="title">Username</label>
    <input type="text" name="username" id="username" class="form-control" value="{{$account->username}}" hidden>
    <input type="text" name="username" id="username" class="form-control" value="{{$account->username}}" disabled>
    <label for="title">Password</label>
    <input type="password" name="password" id="password" class="form-control" value="{{$account->password}}">
    <label for="title">Name</label>
    <input type="text" name="name" id="name" class="form-control" value="{{$account->name}}">
    <label for="title">Role</label>
    <select name="role" id="role" class="form-control">
        <option value="admin" {{$account->role == 'admin' ? 'selected': ''}}>Admin</option>
        <option value="author" {{$account->role == 'author' ? 'selected': ''}}>Author</option>
    </select>
    <input type="submit" value="Edit" class="btn btn-success float-end">
</form>
@endsection
