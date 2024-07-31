@extends('layouts.master')


@section('content')

    <h1>Post</h1>
    <a href="{{route('post.edit', $post->idpost)}}" class="btn btn-primary d-inline">Update</a>
    <form action="{{route('post.destroy', $post->idpost)}}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger d-inline">Delete</button>
    </form>
    <table class="table table-stripper table-full">
        <tr>
            <td>Title</td>
            <td>{{$post->title}}</td>
        </tr>
        <tr>
            <td>Content</td>
            <td>{{$post->content}}</td>
        </tr>
        <tr>
            <td>Date</td>
            <td>{{$post->date}}</td>
        </tr>
        <tr>
            <td>Username</td>
            <td>{{$post->username}}</td>
        </tr>
    </table>

@endsection


{{-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <nav class="nav">
        <a class="nav-link active" aria-current="page" href="#">Active</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
      </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html> --}}
