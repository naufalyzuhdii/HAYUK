<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('linkCSSlogin')
    <link rel="stylesheet" href="css/login.css">
    <title>Document</title>
    <style>
        .top_logo
        {
            margin-top: 20px;
            margin-left: 40px;
            display: flex;
        }
    </style>
</head>
<body>
    <div class="top_logo">
        <a href="/"><img src="logo.png" alt="" width="13%"></a>
    </div>
    @yield('login')
</body>
</html>