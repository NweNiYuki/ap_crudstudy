<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Programming class')</title>
    
</head>
<body>
    <ul>
        <a href="php"><li>PHP Page</li></a>
        <a href="js"><li>JS Page</li></a>
    </ul>

    @yield("content")
</body>
</html>