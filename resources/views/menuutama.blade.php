@extends('layout.main')

@section('linkCSS')
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/menudaging.css">
@endsection

@section('container')
    <img class="logo" src="logo.png" alt="" height="190" width="190">
    <div class="page_title">
        <p>Mix & Match</p>
        <hr class="title_line">
    </div>
        
    <div class="content_daging">
      
      {{-- AYAM --}}
      <div class="card">
        <div class="object">
          <div class="image" style="background-image: url('../daging/ayam.png');"></div>
          <span class="tag">Most Pick</span>
        </div>
        <div class="card_body">
          <div class="card_body_top">
            <span class="subtle">Daging Ayam</span>
            <div class="top_icons float_right">
              <svg fill="#888888" height="16" viewBox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 0h24v24H0z" fill="none"/>
                <path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92 1.61 0 2.92-1.31 2.92-2.92s-1.31-2.92-2.92-2.92z"/>
              </svg>
            </div>
          </div>
          <span class="card_title">Manfaat daging ayam untuk kesehatan sebenarnya jauh lebih beragam dari yang banyak orang tahu. 
              Tidak hanya sebagai sumber protein, daging ayam juga mengandung gizi lainnya</span>
          <div class="support">
            <span class="support_text subtle">Chicken</span>
          </div>
          <div class="support support_reveal">
            <a href="#/" class="support_text add_cart float_right">+</a>
          </div>
        </div>
      </div>     

      {{-- SAPI --}}
      <div class="card">
        <div class="object">
          <div class="image" style="background-image: url('../daging/sapi.png');"></div>
          <span class="tag">Most Pick</span>
        </div>
        <div class="card_body">
          <div class="card_body_top">
            <span class="subtle">Daging Sapi</span>
            <div class="top_icons float_right">
              <svg fill="#888888" height="16" viewBox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 0h24v24H0z" fill="none"/>
                <path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92 1.61 0 2.92-1.31 2.92-2.92s-1.31-2.92-2.92-2.92z"/>
              </svg>
            </div>
          </div>
          <span class="card_title">Daging sapi adalah sumber protein dan nutrisi lain yang baik untuk tubuh. Namun, 
              di sisi lain juga tinggi kolesterol dan lemak jenuh yang dapat menyebabkan timbunan lemak dalam darah.</span>
          <div class="support">
            <span class="support_text subtle">Beef</span>
          </div>
          <div class="support support_reveal">
            <a href="#/" class="support_text add_cart float_right">+</a>
          </div>
        </div>
      </div>

      {{-- UDANG --}}
      <div class="card">
        <div class="object">
          <div class="image" style="background-image: url('../daging/udang.png');"></div>
        </div>
        <div class="card_body">
          <div class="card_body_top">
            <span class="subtle">Udang</span>
            <div class="top_icons float_right">
              <svg fill="#888888" height="16" viewBox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 0h24v24H0z" fill="none"/>
                <path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92 1.61 0 2.92-1.31 2.92-2.92s-1.31-2.92-2.92-2.92z"/>
              </svg>
            </div>
          </div>
          <span class="card_title">Manfaat dari udang adalah dapat membantu kesehatan tubuh kita dalam menurunkan risiko 
            penyakit jantung dan pembuluh darah, selain itu udang dapat meningkatkan kinerja otak.</span>
          <div class="support">
            <span class="support_text subtle">Shrimp</span>
          </div>
          <div class="support support_reveal">
            <a href="#/" class="support_text add_cart float_right">+</a>
          </div>
        </div>
      </div>

      {{-- CUMI --}}
      <div class="card">
        <div class="object">
          <div class="image" style="background-image: url('../daging/cumi.png');"></div>
        </div>
        <div class="card_body">
          <div class="card_body_top">
            <span class="subtle">Cumi</span>
            <div class="top_icons float_right">
              <svg fill="#888888" height="16" viewBox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 0h24v24H0z" fill="none"/>
                <path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92 1.61 0 2.92-1.31 2.92-2.92s-1.31-2.92-2.92-2.92z"/>
              </svg>
            </div>
          </div>
          <span class="card_title">Cumi memiliki berbagai manfaat untuk kesehatan tubuh dapat membantu menurunkan kolesterol,
            mengatur pembentukan sel darah merah dan bisa menjaga keseimbangan tekanan darah.</span>
          <div class="support">
            <span class="support_text subtle">Squid</span>
          </div>
          <div class="support support_reveal">
            <a href="#/" class="support_text add_cart float_right">+</a>
          </div>
        </div>
      </div>

      {{-- KAMBING --}}
      <div class="card">
        <div class="object">
          <div class="image" style="background-image: url('../daging/kambing.png');"></div>
        </div>
        <div class="card_body">
          <div class="card_body_top">
            <span class="subtle">Daging Kambing</span>
            <div class="top_icons float_right">
              <svg fill="#888888" height="16" viewBox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 0h24v24H0z" fill="none"/>
                <path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92 1.61 0 2.92-1.31 2.92-2.92s-1.31-2.92-2.92-2.92z"/>
              </svg>
            </div>
          </div>
          <span class="card_title">Manfaat daging kambing dapat membantu kesehatan tubuh kita dalam mencegah anemia Sebab, 
            kandungan gizi daging kambing kaya akan vitamin B12 dan zat besi.</span>
          <div class="support">
            <span class="support_text subtle">Lamb</span>
          </div>
          <div class="support support_reveal">
            <a href="#/" class="support_text add_cart float_right">+</a>
          </div>
        </div>
      </div>

      {{-- IKAN --}}
      <div class="card">
        <div class="object">
          <div class="image" style="background-image: url('../daging/ikan.png');"></div>
        </div>
        <div class="card_body">
          <div class="card_body_top">
            <span class="subtle">Ikan</span>
            <div class="top_icons float_right">
              <svg fill="#888888" height="16" viewBox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 0h24v24H0z" fill="none"/>
                <path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92 1.61 0 2.92-1.31 2.92-2.92s-1.31-2.92-2.92-2.92z"/>
              </svg>
            </div>
          </div>
          <span class="card_title">ikan mempunyai banyak manfaat salah satunya dapat mencegah terjadinya penyakit jantung, 
            penyakit kolesterol dan membantu sistem kardiovaskuler.</span>
          <div class="support">
            <span class="support_text subtle">Fish</span>
          </div>
          <div class="support support_reveal">
            <a href="#/" class="support_text add_cart float_right">+</a>
          </div>
        </div>
      </div>
          
    </div>
    @yield('content')
@endsection