<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('linkCSS')
    <title>Document</title>
</head>
<body>
    <header>
        @include('partial.navbar')
    </header>
    @yield('container')
    <script src="menu.js"></script>
</body>
</html>