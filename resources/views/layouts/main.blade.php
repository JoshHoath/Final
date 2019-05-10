<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <link rel="stylesheet"  href="/css/app.css"/>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Tweeter</title>
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-expand-lg navbar-dark bg-custom">
                <a class="navbar-brand" href="/tweets">Tweeter</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="/profiles/{{Auth::id()}}">Profile</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="/who-to-follow">Who to follow</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="/register">Register</a>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link" href="/logout">Log Out</a>
                        </li>
                    </ul>
                </div>
            </nav>
            @yield('content')
        </div>
        <script src="/js/app.js"></script>
    </body>
</html>
