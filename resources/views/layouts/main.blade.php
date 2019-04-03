<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <link rel="stylesheet"  href="/css/app.css"/>
        <meta charset="utf-8">
        <title>Tweeter</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
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
                        <a class="nav-link" href="#">Who to follow</a>
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
        <script src="/js/app.js"></script>
    </body>
</html>
