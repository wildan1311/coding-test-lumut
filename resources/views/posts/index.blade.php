@extends('layouts.master')

@section('content')
<h1>Post</h1>
<a href="{{route('account.create')}}" class="btn btn-success">Create Post</a>
<table class="table table-stripped table-full">
    <thead>
        <tr>
            <td>#</td>
            <td>Title</td>
            <td>Content</td>
            <td>Date</td>
            <td>Username</td>
            <td></td>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->content}}</td>
                <td>{{$post->date}}</td>
                <td>{{$post->username}}</td>
                <td>
                    <a href="{{route('post.edit', $post->idpost)}}" class="btn btn-primary d-inline">Edit</a>
                    <a href="{{route('post.show', $post->idpost)}}" class="btn btn-secondary d-inline">Detail</a>
                    <form action="{{route('post.destroy', $post->idpost)}}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger d-inline">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
