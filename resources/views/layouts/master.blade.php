<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <nav class="nav container mb-3 d-flex justify-content-between">
        <div>
            <h3>My Application</h3>
        </div>
        <div class="d-flex flex-row">
            <a class="nav-link" href="{{route('post.index')}}">Post</a>
            <a class="nav-link" href="{{route('account.index')}}">Account</a>
            @php
                $login = session()->get('account', 'default');
                if ($login == 'default') {
                    echo '<a class="nav-link" href="/login">Login</a>';
                } else {
                    echo '<a class="nav-link" href="/logout">Logout</a>';
                }
            @endphp
        </div>
      </nav>
    <div class="container">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
