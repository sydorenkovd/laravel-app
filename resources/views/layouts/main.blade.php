<!doctype html>
<html class="no-js" lang="en">
<head>
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"
          crossorigin="anonymous">
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>PhotoGallery | Welcome</title>
    <link rel="stylesheet" href="/css/foundation.css">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
<div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
        <div class="off-canvas position-left reveal-for-large" id="my-info" data-off-canvas data-position="left">
            <div class="row column">
                <br>
            <h5>Main Menu</h5>
                <ul class="side-nav">
                    <li><a href="/">Home</a> </li>
                    <li><a href="/photo">All Photos</a> </li>
                    <?php if(Auth::check()) : ?>
                    <li><a href="/gallery/create">Create Gallery</a> </li>
                    <?php endif; ?>

                </ul>
            </div>
        </div>
        <div class="off-canvas position-right reveal-for-large" id="my-info" data-off-canvas data-position="left">
            <div class="row column">
                <ul class="side-nav">
                    <?php if(!Auth::check()) : ?>
                    <li><a href="/login">Login</a> </li>
                    <li><a href="/register">Register</a> </li>
                    <?php endif; ?>
                    <?php if(Auth::check()) : ?>
                    <li><a href="/logout">Logout</a> </li>
                    <?php endif; ?>

                </ul>
            </div>
        </div>
        <div class="off-canvas-content" data-off-canvas-content>
            <div class="title-bar hide-for-large">
                <div class="title-bar-left">
                    <button class="menu-icon" type="button" data-open="my-info"></button>
                    <span class="title-bar-title">Mike Mikerson</span>
                </div>
            </div>
            @if(Session::has('message'))
                <div data-alert class="alert-box">
                    {{ Session::get('message') }}
                </div>
            @endif
            @yield('content')
        </div>
    </div>
</div>
<script src="/js/vendor/foundation.js"></script>
<script src="/js/vendor/jquery.js"></script>
{{--<script src="js/vendor/what-input.js"></script>--}}
<script src="/js/app.js"></script>
<script>
    $(document).foundation();
</script>
</body>
</html>