<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{'css/app.css'}}">
        <title>PresEntry</title>




    </head>
    <body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/">PresEntry</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/showall">Show Entries</a>
                </li>
            </ul>
    </nav>







            <div class="container jumbotron text-center">
                <h1>PresEntry</h1>
                <br>
                <p>PresEntry is your favorite app to be used as any group's attendance system on the go! </p>
                <div class="flex-center position-ref full-height">
                    @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                                <a href="{{ url('/home') }}">
                                    <button class="btn btn-success">Home</button>
                                </a>
                            @else
                                <a href="{{ route('login') }}">
                                    <button class="btn btn-primary">Login</button>
                                </a>
                                <a href="{{ route('register') }}">
                                    <button class="btn btn-success">Register</button>
                                </a>
                            @endauth
                        </div>
                    @endif
            </div>
        </div>
    </body>
</html>
