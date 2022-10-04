@extends('layout.login')

@section('linkCSSlogin')
    <link rel="stylesheet" href="css/signin.css">
@endsection

@section('login')
<body>
    <div class="center">
        <h1>Sign In</h1>
        <form action="">
            <div class="txtField">
                <input type="text" required>
                <span></span>
                <label>Username</label>
            </div>
            <div class="txtField">
                <input type="password" required>
                <span></span>
                <label>password</label>
            </div>
            <div class="pass">Forgot Password</div>
            <input type="submit" value="Sign In">
            <div class="signup_link">
                <a href="/signup">Sign Up</a>
            </div>
        </form>
    </div>
</body>
@endsection