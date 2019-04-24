<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <link rel="stylesheet" href="css/app.css"/>
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
        <div id="marketing-app">
            <div class="container">
                <div class="col-md-10 offset-1 text-center" id="title">
                    <h1>Why Tweeter?</h1>
                </div>
                <div class="main">
                    <section class="page1 tps-section">
                        <div class="page_container">
                            <img src="#">
                            booty
                        </div>
                    </section>
                    <section class="page2 tps-section">
                        <div class="page_container">
                            <img src="#">
                            booty
                        </div>
                    </section>
                    <section class="page3 tps-section">
                        <div class="page_container">
                            <img src="#">
                            booty
                        </div>
                    </section>
                    <section class="page4 tps-section">
                        <div class="page_container">
                            <img src="#">
                            booty
                        </div>
                    </section>
                    <section class="page5 tps-section">
                        <div class="page_container">
                            <img src="#">
                            booty
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/jquery.tiltedpage-scroll.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>
