<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <link rel="stylesheet" href="css/tiltedpage-scroll.css">
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
        <div class="title-container">
            <h1 class="text-center title">Why Tweeter?</h1>
        </div>
            <div class="main">
                <section class="page1">
                    <div class="page_container">

                    </div>
                </section>
                <section class="page2">
                    <div class="page_container">

                    </div>
                </section>
                <section class="page3">
                    <div class="page_container">

                    </div>
                </section>
                <section class="page4">
                    <div class="page_container">

                    </div>
                </section>
            </div>
        <script src="js/app.js"></script>
        <script>
            $(document).ready(function() {
                $(".main").tiltedpage_scroll({
                    sectionContainer: "> section",
                    angle: 50,
                    opacity: true,
                    scale: true,
                    outAnimation: true
                });
            });
        </script>
    </body>
</html>
