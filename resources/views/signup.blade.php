@extends('layout.login')

@section('linkCSSlogin')
    <link rel="stylesheet" href="css/signup.css">
@endsection

@section('login')

    <input type="checkbox" id="show" class="show" />
    <!-- Title+Button -->
    <label for="show" class="title">sign up<i class="flag left"></i><i class="flag right"></i></label>
    <!-- Form -->
    <form action="" class="form">
        <!-- First Name -->
        <div class="group">
            <div class="col-1">
                <label for="f-name">first name</label>
            </div>
            <div class="col-2">
                <input type="text" id="f-name" placeholder="First Name" />
            </div>
        </div>
        <!-- Last Name -->
        <div class="group">
            <div class="col-1">
                <label for="l-name">last name</label>
            </div>
            <div class="col-2">
                <input type="text" id="l-name" placeholder="Last Name" />
            </div>
        </div>
        <!-- Password -->
        <div class="group">
            <div class="col-1">
                <label for="password">your password</label>
            </div>
            <div class="col-2">
                <input type="password" id="password" placeholder="password" />
            </div>
        </div>
        <!-- Email -->
        <div class="group">
            <div class="col-1">
                <label for="email">your email</label>
            </div>
            <div class="col-2">
                <input type="email" id="email" placeholder="example@email.com" />
            </div>
        </div>
        <!-- Terms & Conditions -->
        <div class="group-2">
            <input type="checkbox" class="checkbox" id="terms" />
            <label for="terms"><span class="toogle"></span>I declare to have read and accepted the <a href="#">terms of service</a></label>
        </div>
        <!-- Notifications -->
        <div class="group-2">
            <input type="checkbox" class="checkbox" id="notifications" />
            <label for="notifications"><span class="toogle"></span>Show me popular news via email</label>
        </div>
        <!-- Submit button -->
        <input type="submit" class="submit" value="submit" />
    </form>

<!-- I declare to have read and accepted the termas of service -->
<!-- Show me popular news via email -->
@endsection