<?php 

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");
 
include "./config/conn.php";

include "./config/fungsi_seo.php";
include "./config/fungsi_indotgl.php";
include "./config/class_paging.php";
include "./config/lang.php";
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>  UMITRA</title>
  <link rel="shortcut icon" href="https://www.umitra.ac.id/favicon.ico" />
  <!-- 
    - favicon
  -->
  <link rel="stylesheet" href="<?php nmurl();?>assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="assets/css/flexslider.css" type="text/css" media="screen" />


  <link rel="preload" as="image" href="<?php nmurl();?>assets/images/hero-banner.png">
  <link rel="preload" as="image" href="<?php nmurl();?>assets/images/hero-abs-1.png" media="min-width(768px)">
  <link rel="preload" as="image" href="<?php nmurl();?>assets/images/hero-abs-2.png" media="min-width(768px)">

<link rel="stylesheet" href="<?php nmurl();?>assets/css/timeline.min.css" />
 
<style>

.language-menu {
    display: none; /* Sembunyikan menu secara default */
    flex-direction: column;
    position: absolute;
    top: 105px; /* Atur sesuai kebutuhan */
    right: 50px;
    background-color: #ffffff; /* Warna latar belakang menu */
    border-radius: 5px;
    padding: 10px;
}

.language-menu.show {
    display: flex; /* Tampilkan menu saat 'show' aktif */
}

.language-item {
    color: #3737FF; /* Warna teks */
    padding: 5px 10px;
    cursor: pointer; /* Pointer saat hover */
}

.language-item:hover {
    background-color: #ffffff; /* Warna saat hover */
}

</style>

</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <h1>
        <a href="/" class="logo">
          <img width="300" src="https://dummy.umitra.ac.id/assets/images/logo.png" class="img-responsive" alt="Universitas Mitra Indonesia" decoding="async">
        </a>
      </h1>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">
          <a href="#" class="logo">UMITRA</a>

          <button class="nav-close-btn" aria-label="Close menu" data-nav-toggler>
            <ion-icon name="close-outline"></ion-icon>
          </button>
        </div>

        
        <!-- mn -->
         <div class="navMN">
 
         <ul> 
            <li><a href="/" class="navbar-link">Beranda</a></li>
            <li><a href="#" class="navbar-link">Tentang Umitra</a>
 
                <ul>
                    <li><a href="/about/sambutan-rektor/197"  > Sambutan Rektor </a></li>
                    <li><a href="/about/profil-umitra-indonesia/198"  >Sejarah</a></li>
                    <li><a href="/visi-misi-universitas-mitra-indonesia"  > Visi, Misi & Tujuan </a></li>
                    <li><a href="/about/struktur-organisasi/201"  > Struktur Organisasi </a></li>
                    <li><a href="/fasilitas-umitra"  > Fasilitas</a></li> 
                </ul>
            </li>
 
            <li class="dropdown"><a href="#" class="navbar-link">Fakultas</a>
 
              <ul>
                <li><a href="#">Kesehatan
                   </a>

                    <ul>
                        <li><a href="/profile-prodi/profesi-ners">Profesi Ners </a></li> 
                        <li><a href="/profile-prodi/s1-kesehatan-masyarakat">S1 Kesehatan Masyarakat </a></li> 
                        <li><a href="/profile-prodi/s1-keperawatan">S1 Keperawatan </a></li> 
                        <li><a href="/profile-prodi/s1-gizi">S1 Gizi </a></li> 
                        <li><a href="/profile-prodi/s2-kesehatan-masyarakat">S2 Magister Kesehatan </a></li> 
                    </ul>
                  </li>

 
                <li><a href="#">Komputer</a>
                    <ul>
                        <li><a href="/profile-prodi/s1-sistem-informasi">S1 Sistem Informasi      
                        </a></li> 
                        <li><a href="/profile-prodi/s1-informatika">S1 Informatika </a></li>  
                        <li><a href="/profile-prodi/s1-teknologi-informasi">S1 Teknologi Informasi  </a></li>  
 
                    </ul>
                </li>
 
                <li><a href="#">Bisnis</a>
                    <ul>
                        <li><a href="/profile-prodi/d3-akuntansi"> D3 Manajemen        
                        </a></li> 
                        <li><a href="/profile-prodi/s1-manajemen"> S1 Manajemen </a></li>  
                        <li><a href="/profile-prodi/s1-akuntansi"> S1 Akuntasi </a></li> 
                        <li><a href="/profile-prodi/s1-kewirausahaan"> S1 Kewirausahaan </a></li> 
                        <li><a href="/profile-prodi/s2-manajemen"> S2 Manajemen </a></li> 
                    </ul>
                  </li>
 
                <li><a href="#">Hukum</a>
                    <ul>
                        <li><a href="/profile-prodi/s1-hukum">S1-Hukum </a></li> 
                    </ul>
                </li>

                <li><a href="/akreditasi-program-studi">Akreditasi</a></li>

               </ul>
 
            </li>
 
            <li><a href="#" class="navbar-link">Informasi & Berita</a>
                <ul>
 
                <li><a href="/semua-informasi/">Informasi</a></li> 
                <li><a href="/semua-berita/">Berita Terbaru</a></li> 
               </ul>

            </li>
             
            <li><a href="/hubungi-kami" class="navbar-link"> Kontak Kami</a></li>
        </ul>
 
    </div>  <!-- end mn -->

      </nav>

      <div class="header-actions">

        
        <button class="header-action-btn" aria-label="Open search" data-search-toggler>
          <ion-icon name="search-outline"></ion-icon>
        </button>
    
        <a href="https://www.umitra.ac.id/simpt/index.php/sipenerimaan/home" class="btn2 btn2-primary mPendaftaran" style="height:20px;">
          <ion-icon name="person-outline" aria-hidden="true" role="img"  ></ion-icon>
          <span class="span mPendaftaran">  Pendaftaran</span>
        </a>

        <a class="button-text-with-icon" href="#"  style="background-color:#3737FF" onclick="toggleLanguageMenu();">
          <i class="fas fa-globe fa-2x" style="margin-top:10px;"></i><span class="button-text"></span></a>
          
        <div id="language-menu" class="language-menu" style="">
          <span class="language-item" onclick="window.location.href='?lang=id'">ID</span>
          <span class="language-item" onclick="window.location.href='?lang=en'">EN</span>
        </div>

        <button class="header-action-btn nav-open-btn" aria-label="Open menu" data-nav-toggler>
          <ion-icon name="menu-outline"></ion-icon>
        </button>

      </div>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>

  <!-- 
    - #SEARCH BOX
  -->

  <div class="search-container" data-search-box>
    <div class="container">

      <button class="search-close-btn" aria-label="Close search" data-search-toggler>
        <ion-icon name="close-outline"></ion-icon>
      </button>

      <div class="search-wrapper">
       <form action="/cari/" method="POST" > 
        <input type="search" name="search" placeholder="Ketikan kata cari lalu enter..." aria-label="Search" class="search-field">
        <submit class="search-submit" aria-label="Submit">
          <ion-icon name="search-outline"></ion-icon>
        </submit>
       </form>
      </div>

    </div>
  </div>

  <?php include "./content.php" ;?>

<div style="  background-color: #231F41;margin-bottom:-10px;" data-negative="false">

 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 105" preserveAspectRatio="none">
  <path style="fill: #fff;transform: rotateY(0deg);  transform-origin: center;" opacity="0.33" d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7 c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z"></path>
  <path style="fill: #fff;transform: rotateY(0deg);  transform-origin: center;"   opacity="0.66" d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1 s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z"></path>
  <path style="fill: #fff;transform: rotateY(0deg);  transform-origin: center;"  d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0 h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z"></path>
</svg>
</div>

  <!-- 
    - #FOOTER
  -->

  <footer class="footer">
    <div class="container">
      <div class="footer-top">
        <div class="footer-brand">
          <a href="/" class="logo">
            <img width="300" src="https://dummy.umitra.ac.id/assets/images/logo.png" class="img-responsive" alt="Universitas Mitra Indonesia">
          </a>

          <div class="col-md-12" style="padding-top:0px;margin-top:20px;margin-bottom:30px;padding: 0px 0px 0px 0px;border :7px solid white;border-radius:10px; ">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1986.1462720201985!2d105.24111394351651!3d-5.372282041479407!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40dab66bc07565%3A0x8a9127a26af1e84e!2sMitra+Lampung+University!5e0!3m2!1sen!2sid!4v1514356311699" style="padding-top:5px;background-color:white;width:100%;margin:0px;" height="225" frameborder="0" allowfullscreen=""></iframe>
          </div>

          <ul class="social-list">
            <li><a href="#" class="social-link-fb "><ion-icon name="logo-facebook"></ion-icon></a></li>
            <li><a href="#" class="social-link-ig"><ion-icon name="logo-instagram"></ion-icon></a></li>
            <li><a href="#" class="social-link-tiktok"><ion-icon name="logo-tiktok"></ion-icon></a></li>
            <li><a href="#" class="social-link-yt"><ion-icon name="logo-youtube"></ion-icon></a></li>
          </ul>
        </div>

        <ul class="footer-list">
          <li><p class="footer-list-title">Kantor Pusat</p></li>
          <li><a href="#" class="footer-link"><ion-icon name="chevron-forward" aria-hidden="true"></ion-icon><span class="span">Pusat Perencanaan Dan Pengembangan Tridarma & Kerjasama (P3TK)</span></a></li>
          <li><a href="#" class="footer-link"><ion-icon name="chevron-forward" aria-hidden="true"></ion-icon><span class="span">Pusat Laboratorium & Pengembangan Sistem  Informasi (PLPSI)</span></a></li>
          <li><a href="#" class="footer-link"><ion-icon name="chevron-forward" aria-hidden="true"></ion-icon><span class="span">Pusat Humas, Marketing & Kerjasama (PHMK)</span></a></li>
          <li><a href="#" class="footer-link"><ion-icon name="chevron-forward" aria-hidden="true"></ion-icon><span class="span">Pusat Karir, Program Internasional & Ormawa (PKPIO)</span></a></li>
          <li><a href="#" class="footer-link"><ion-icon name="chevron-forward" aria-hidden="true"></ion-icon><span class="span">Pusat Perpustakaan</span></a></li>
        </ul>

        <ul class="footer-list">
          <li><p class="footer-list-title">Lembaga Dan Badan</p></li>
          <li><a href="#" class="footer-link"><ion-icon name="chevron-forward" aria-hidden="true"></ion-icon><span class="span">Lembaga Penelitian, Pengabdian Pada</span></a></li>
          <li><a href="#" class="footer-link"><ion-icon name="chevron-forward" aria-hidden="true"></ion-icon><span class="span">Badan Penjamin Mutu</span></a></li>
          <li><p class="footer-list-title">BIRO</p></li>
          <li><a href="#" class="footer-link"><ion-icon name="chevron-forward" aria-hidden="true"></ion-icon><span class="span">Biro Administrasi Akademik & Kemahasiswaan</span></a></li>
          <li><a href="#" class="footer-link"><ion-icon name="chevron-forward" aria-hidden="true"></ion-icon><span class="span">Biro Administrasi SDM Umum dan Keuangan</span></a></li>
        </ul>

        <ul class="footer-list">
          <li><p class="footer-list-title">Informasi  Kontak</p></li>
          <li class="footer-item"><ion-icon name="location-outline" aria-hidden="true"></ion-icon>
            <address class="footer-link">Jl. ZA. Pagar Alam No. 7, Gedong Meneng, Kec. Rajabasa, Kota Bandar Lampung, Lampung 40115.</address>
          </li>
          <li class="footer-item"><ion-icon name="call" aria-hidden="true"></ion-icon><a href="tel:+13647657839" class="footer-link"> (0721) 701418 </a></li>
          <li class="footer-item"><ion-icon name="mail-outline" aria-hidden="true"></ion-icon><a href="mailto:contact@eduhome.com" class="footer-link">info@umitra.ac.id </a></li>
          <li class="footer-item"><ion-icon name="mail-outline" aria-hidden="true"></ion-icon><a href="mailto:contact@eduhome.com" class="footer-link">umitra_indonesia@umitra.ac.id </a></li>
        </ul>

      </div>

      <div class="footer-bottom">
        <p class="copyright">&copy; 2024 Universitas Mitra Indonesia. All Rights Reserved </p>
      </div>
    </div>
  </footer>

  <a href="#top" class="back-top-btn" aria-label="Back to top" data-back-top-btn>
    <ion-icon name="arrow-up"></ion-icon>
  </a>

  <script src="<?php nmurl();?>assets/js/script.js" defer></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

  <!-- FlexSlider -->
  <script defer src="assets/js/jquery.flexslider.js"></script>

  <script type="text/javascript">
    $(window).load(function(){
      $(".flexslider").flexslider({
          animation: "slide",
          useCSS: false,
          animationLoop: false,
          smoothHeight: true,
          start: function(slider){
            $('body').removeClass('loading');
          },
      });

      $("#partnerImg").show();
 
      $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });

   var images = [
      'https://dummy.umitra.ac.id//assets/images/hero-bg_0.jpg',
      'https://dummy.umitra.ac.id//assets/images/hero-bg_3.jpg',
      'https://dummy.umitra.ac.id//assets/images/hero-bg1.jpg'
    ];

    function checkMobile() {
      if (window.matchMedia("(max-width: 767px)").matches) {
      } else {
        var currentIndex = 0;
        function changeBackground() {
          currentIndex = (currentIndex + 1) % images.length;
          var newImage = images[currentIndex];
          var $hero = $('.hero');
          var $overlay = $('.overlay');

          // Update background image of the hero and overlay
          $overlay.css('background-image', 'url(' + newImage + ')');
          $overlay.addClass('left');

          setTimeout(function() {
            $hero.css('background-image', 'url(' + newImage + ')');
            $overlay.removeClass('left').addClass('right');
          }, 1000);

          setTimeout(function() {
            $overlay.removeClass('right').css('background-image', 'none');
          }, 1000);
        }

        // Initial setup
        $('.hero').css('background-image', 'url(' + images[currentIndex] + ')');
        $('.overlay').css('background-image', 'url(' + images[currentIndex] + ')');
        setInterval(changeBackground, 7000);
      }
    }

    checkMobile();

    $(window).resize(function() {
      checkMobile();
    });
  });

  function toggleLanguageMenu() {
    const menu = document.getElementById('language-menu');
    if (menu.style.display === 'none') {
        menu.style.display = 'block';
    } else {
        menu.style.display = 'none';
    }
  }
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

</body>
</html>
