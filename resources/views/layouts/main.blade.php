<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/app.css">
    <title>Photo Galery | Welcome</title>
</head>
<body>
<ul class="list-group">
    <li class="list-group-info"><a href="/">Home</a></li>
    <li class="list-group-item-info"><a href="login">Login</a></li>
    <li class="list-group-item-info"><a href="register">Register</a></li>
    <li class="list-group-item-info"><a href="/gallery/create">Create gallery</a></li>
</ul>


<div>
    @yield('content')
</div>
<script src="/js/jquery-1.11.1.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>