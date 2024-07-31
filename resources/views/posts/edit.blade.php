@extends('layouts.master')

@section('content')

    <form action="{{route('post.update', $post->idpost)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" value="{{$post->title}}" class="form-control">
        <label for="Content">Content</label>
        <textarea name="content" id="content" cols="30" rows="10" value="{{$post->content}}" class="form-control">{{$post->content}}</textarea>
        <input type="text" name="username" value="{{$post->username}}" hidden>
        <input type="submit" value="edit" class="btn btn-success float-end">
    </form>

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
    <h1>Edit Post</h1>
    <nav class="nav">
        <a class="nav-link active" aria-current="page" href="#">Active</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
      </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html> --}}
