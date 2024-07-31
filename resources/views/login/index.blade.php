@extends('layouts.master')

@section('content')
    <div class="my-auto" style="height: 100vh">
        <h1>Login</h1>
        <form action="/authenticate" method="POST">
            @csrf
            <label for="">Username</label>
            <input type="text" name="username" class="form-control">
            <label for="">Password</label>
            <input type="password" name="password" class="form-control">
            <button type="submit" class="btn btn-success">Login</button>
        </form>

    </div>
@endsection
