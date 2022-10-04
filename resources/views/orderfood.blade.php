@extends('layout.main')

@section('linkCSS')
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/orderfood.css">
    <link rel="stylesheet" href="css/mixmatchmenu.css">
@endsection

@section('container')
<img class="logo" src="logo.png" alt="" height="190" width="190">
<div class="page_title">
    <p>Mix & Match</p>
    <hr class="title_line">
</div>

    <div class="info">
        <h3>Untuk order food , kami menyediakan makanan yang berdasar 
        crispy chicken yang dikombinasikan dengan bumbu nusantara</h3>
    </div>
    
    <div class="listMenu">
        <br>
        <div class="pilihMenu">
            <h3>Pilih menu yang kamu inginkan</h3>
        </div>

        <div class="list">
            <div class="menu1">
                <img class ="arrow" src="panah.png" alt="" width="1.5%">
                Crispy Chicken + Bumbu Rendang
            </div>

            <div class="menu2">
                <img class ="arrow" src="panah.png" alt="" width="1.5%"> 
                Crispy Chicken + Bumbu Rica
            </div>

            <div class="menu3">
                <img class ="arrow" src="panah.png" alt="" width="1.5%"> 
                Crispy Chicken + Bumbu Basi
            </div>



        </div>



    </div>
    


@yield('content')
@endsection