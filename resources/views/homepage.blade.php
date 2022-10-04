@extends('layout.main')

@section('linkCSS')
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/homepage.css">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Arimo:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arimo:wght@400;700&family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arimo:wght@400;700&family=Bebas+Neue&display=swap" rel="stylesheet">
@endsection

@section('container')
    {{-- <img class="logo" src="logo.png" alt="" height="190" width="190"> --}}
    <div class="home_mid">
        
        <div class="home_content">
            
            {{-- <div class="caption">
                <div class="desc1">Halo !</div>
                <div class="desc2">Selamat Datang dan Selamat Berkreasi</div>
                <div class="desc3"> Hayuk merupakan sebuah usaha yang berawal dari 
                    keresahan kami yang menginginkan sebuah makanan berbahan dasar daging ayam yang diolah dengan cara digoreng
                    serta diberi sentuhan bumbu tradisional Indonesia. Hayuk dibuat untuk menjawab beberapa keresahan kepada para 
                    penikmat kuliner khususnya berbahan dasar daging ayam yang merasa bosan dengan bumbu yang hanya itu - itu saja.
                </div>
            </div> --}}
        
            
            <p class="title">H A Y U K<br><span class="title-desc">Mix & Match</span></p>
            <img class="logo" src="logo.png" alt="" width="35%">
        </div>
        
        <nav class="sidebar">
            <section class="nav_icon">
                <span class="topBar"></span>
                <span class="midBar"></span>
                <span class="botBar"></span>
            </section>
            <div class="sosmed">
                <div class="facebook">
                    <a href="https://www.facebook.com/profile.php?id=100074786287262"> 
                        <img src="logoFacebook.png" alt="" width="80px">
                    </a>
                </div>
                <a href="/about" class="about"><p>About Us</p></a>
                <div class="instagram">
                    <a href="https://www.instagram.com/hayuk.nusantara/">
                        <img src="logoInstagram.png" alt="" width="55px">
                    </a>
                <div>
            </div>
        </nav>
        
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script>
            $(function(){
                $(".nav_icon").click(function(){
                    $(".sidebar").toggleClass('navigation-open');
                });
            });
        </script>
    </div>
@endsection