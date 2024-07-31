@extends('layouts.master')


@section('content')

<h1>Create Account</h1>
<form action="{{route('account.store')}}" method="POST">
    @csrf
    <label for="title">Username</label>
    <input type="text" name="username" id="username" class="form-control">
    <label for="title">Password</label>
    <input type="password" name="password" id="password" class="form-control">
    <label for="title">Name</label>
    <input type="text" name="name" id="name" class="form-control">
    <label for="title">Role</label>
    <select name="role" id="role" class="form-control">
        <option value="admin">Admin</option>
        <option value="author">Author</option>
    </select>
    <input type="submit" value="Save" class="btn btn-success float-end">
</form>

@endsection
