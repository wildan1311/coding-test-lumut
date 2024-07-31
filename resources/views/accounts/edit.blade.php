<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
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
        <select name="role" id="role">
            <option value="admin">Admin</option>
            <option value="author">Author</option>
        </select>
        <input type="text" name="role" id="role" class="form-control" value="{{$account->role}}">
        <input type="submit" value="Save">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
