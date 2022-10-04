@extends('layout.main')

@section('linkCSS')
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/menubumbu.css">
@endsection

@section('container')
    <img class="logo" src="logo.png" alt="" height="190" width="190">
    <div class="page_title">
      <p>Mix & Match</p>
      <hr class="title_line">
    </div>

    <div class="content_bumbu">
      
      {{-- RENDANG --}}
      <div class="card">
        <div class="object">
          <div class="image" style="background-image: url('../bumbu/rendang.png');"></div>
          <span class="tag">Most Pick</span>
        </div>
        <div class="card_body">
          <div class="card_body_top">
            <span class="subtle">Bumbu Rendang</span>
            <div class="top_icons float_right">
              <svg fill="#888888" height="16" viewBox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 0h24v24H0z" fill="none"/>
                <path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92 1.61 0 2.92-1.31 2.92-2.92s-1.31-2.92-2.92-2.92z"/>
              </svg>
            </div>
          </div>
          <span class="card_title">Rendang adalah masakan yang mengandung bumbu rempah yang kaya. Rendang menggunakan santan kelapa (karambia), 
            dan campuran dari berbagai bumbu khas yang dihaluskan.</span>
          <div class="support">
            <span class="support_text subtle">Spicy</span>
          </div>
          <div class="support support_reveal">
            <a href="#/" class="support_text add_cart float_right">+</a>
          </div>
        </div>
      </div>

      {{-- CINCANE --}}
      <div class="card">
        <div class="object">
          <div class="image" style="background-image: url('../bumbu/cincane.png');"></div>
        </div>
        <div class="card_body">
          <div class="card_body_top">
            <span class="subtle">Bumbu Cincane</span>
            <div class="top_icons float_right">
              <svg fill="#888888" height="16" viewBox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 0h24v24H0z" fill="none"/>
                <path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92 1.61 0 2.92-1.31 2.92-2.92s-1.31-2.92-2.92-2.92z"/>
              </svg>
            </div>
          </div>
          <span class="card_title">Cincane adalah masakan khas Kalimantan Timur. Cicane menggunakan santan, dan campuran dari berbagai bumbu khas 
            yang di haluskan diantaranya cabai, daun salam, jahe, serai, lengkuas dan aneka bumbu lainnya.</span>
          <div class="support">
            <span class="support_text subtle">Spicy</span>
          </div>
          <div class="support support_reveal">
            <a href="#/" class="support_text add_cart float_right">+</a>
          </div>
        </div>
      </div>

      {{-- TALIWANG --}}
      <div class="card">
        <div class="object">
          <div class="image" style="background-image: url('../bumbu/taliwang.png');"></div>
        </div>
        <div class="card_body">
          <div class="card_body_top">
            <span class="subtle">Bumbu Taliwang</span>
            <div class="top_icons float_right">
              <svg fill="#888888" height="16" viewBox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 0h24v24H0z" fill="none"/>
                <path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92 1.61 0 2.92-1.31 2.92-2.92s-1.31-2.92-2.92-2.92z"/>
              </svg>
            </div>
          </div>
          <span class="card_title">Taliwang adalah makanan khas Pulau Lombok. Taliwang menggunakan saus yang bahannya antara lain cabai merah kering, 
            bawang merah, bawang putih, tomat, terasi goreng, kencur, gula merah, dan garam.</span>
          <div class="support">
            <span class="support_text subtle">Spicy</span>
          </div>
          <div class="support support_reveal">
            <a href="#/" class="support_text add_cart float_right">+</a>
          </div>
        </div>
      </div>

      {{-- CAKALANG --}}
      <div class="card">
        <div class="object">
          <div class="image" style="background-image: url('../bumbu/cakalang.png');"></div>
        </div>
        <div class="card_body">
          <div class="card_body_top">
            <span class="subtle">Bumbu Cakalang</span>
            <div class="top_icons float_right">
              <svg fill="#888888" height="16" viewBox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 0h24v24H0z" fill="none"/>
                <path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92 1.61 0 2.92-1.31 2.92-2.92s-1.31-2.92-2.92-2.92z"/>
              </svg>
            </div>
          </div>
          <span class="card_title">Cakalang adalah makanan khas manado. Cicane menggunakan daun jeruk, jeruk limau, daun kemangi, lengkuas, serai tomat, 
            jahe dan beberapa bahan yang di haluskan seperti cabai dan bawang merah.</span>
          <div class="support">
            <span class="support_text subtle">Spicy</span>
          </div>
          <div class="support support_reveal">
            <a href="#/" class="support_text add_cart float_right">+</a>
          </div>
        </div>
      </div>
      
    </div>
@yield('content')
@endsection