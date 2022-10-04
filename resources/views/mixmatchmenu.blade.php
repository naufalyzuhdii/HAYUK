@extends('layout.main')

@section('linkCSS')
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/mixmatch.css">
    <link rel="stylesheet" href="css/mixmatchmenu.css">
    
    
@endsection

@section('container') 
    <img class="logo" src="logo.png" alt="" height="190" width="190">
    <div class="cols">
        <div class="col" ontouchstart="this.classList.toggle('hover');">
            <a href="/menuutama">
                <div class="menu_card">
                    <div class="front" style="background-image: url(../daging_kotak.png)">
                        <div class="inner">
                            <p>Main Course</p>
                            <span>Aneka Protein</span>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                            <p>Berbagai macam daging dan protein yang akan dipadukan dengan bumbu yang anda inginkan</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col" ontouchstart="this.classList.toggle('hover');">
            <a href="/menubumbu">
                <div class="menu_card">
                    <div class="front" style="background-image: url(../bumbu/taliwang.png)">
                        <div class="inner">
                            <p>Spice</p>
                            <span>Aneka Bumbu</span>
                        </div>
                    </div>
                    <div class="back">
                        <div class="inner">
                            <p>Berbagai macam bumbu seluruh nusantara yang akan dipadukan dengan protein yang anda inginkan</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection