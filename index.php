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
<html lang="<?php echo isset($_SESSION['lang']) ? $_SESSION['lang'] : 'id'; ?>">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo lang('university_name'); ?></title>
  <link rel="shortcut icon" href="https://www.umitra.ac.id/favicon.ico" />
  <!-- 
    - favicon
  
  <link rel="shortcut icon" href="https://www.umitra.ac.id/favicon.ico" type="image/svg+xml">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  -->
  <!-- 
    - custom css link
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
          <img width="300" src="https://dummy.umitra.ac.id/assets/images/logo.png" class="img-responsive" alt="<?php echo lang('university_name'); ?>" decoding="async">
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
            <li><a href="/" class="navbar-link"><?php echo lang('home'); ?></a></li>
            <li><a href="#" class="navbar-link"><?php echo lang('about_us'); ?></a>

                <ul>
                    <li><a href="/about/sambutan-rektor/197"><?php echo lang('rector_message'); ?></a></li>
                    <li><a href="/about/profil-umitra-indonesia/198"><?php echo lang('history'); ?></a></li>
                    <li><a href="/visi-misi-universitas-mitra-indonesia"><?php echo lang('vision_mission'); ?></a></li>
                    <li><a href="/about/struktur-organisasi/201"><?php echo lang('organizational_structure'); ?></a></li>
                    <li><a href="/fasilitas-umitra"><?php echo lang('facilities'); ?></a></li> 
                </ul>
            </li>

            <li class="dropdown"><a href="#" class="navbar-link"><?php echo lang('faculties'); ?></a>

              <ul>
                <li><a href="#"><?php echo lang('faculties_kesehatan'); ?></a>

                    <ul>
                        <li><a href="/profile-prodi/profesi-ners"><?php echo lang('profesi_ners'); ?></a></li> 
                        <li><a href="/profile-prodi/s1-kesehatan-masyarakat"><?php echo lang('s1_kesehatan_masyarakat'); ?></a></li> 
                        <li><a href="/profile-prodi/s1-keperawatan"><?php echo lang('s1_keperawatan'); ?></a></li> 
                        <li><a href="/profile-prodi/s1-gizi"><?php echo lang('s1_gizi'); ?></a></li> 
                        <li><a href="/profile-prodi/s2-kesehatan-masyarakat"><?php echo lang('s2_kesehatan_masyarakat'); ?></a></li> 
                    </ul>
                  </li>

                <li><a href="#"><?php echo lang('faculties_komputer'); ?></a>
                    <ul>
                        <li><a href="/profile-prodi/s1-sistem-informasi"><?php echo lang('s1_sistem_informasi'); ?></a></li> 
                        <li><a href="/profile-prodi/s1-informatika"><?php echo lang('s1_informatika'); ?></a></li>  
                        <li><a href="/profile-prodi/s1-teknologi-informasi"><?php echo lang('s1_teknologi_informasi'); ?></a></li>  

                    </ul>
                </li>

                <li><a href="#"><?php echo lang('faculties_bisnis'); ?></a>
                    <ul>
                        <li><a href="/profile-prodi/d3-akuntansi"><?php echo lang('d3_manajemen'); ?></a></li> 
                        <li><a href="/profile-prodi/s1-manajemen"><?php echo lang('s1_manajemen'); ?></a></li>  
                        <li><a href="/profile-prodi/s1-akuntansi"><?php echo lang('s1_akuntansi'); ?></a></li> 
                        <li><a href="/profile-prodi/s1-kewirausahaan"><?php echo lang('s1_kewirausahaan'); ?></a></li> 
                        <li><a href="/profile-prodi/s2-manajemen"><?php echo lang('s2_manajemen'); ?></a></li> 
                    </ul>
                  </li>

                <li><a href="#"><?php echo lang('faculties_hukum'); ?></a>
                    <ul>
                        <li><a href="/profile-prodi/s1-hukum"><?php echo lang('s1_hukum'); ?></a></li> 
                    </ul>
                </li>

                <li><a href="/akreditasi-program-studi"><?php echo lang('akreditasi'); ?></a></li>

               </ul>

            </li>

            <li><a href="#" class="navbar-link"><?php echo lang('news'); ?></a>
                <ul>

                <li><a href="/semua-informasi/"><?php echo lang('news_information'); ?></a></li> 
                <li><a href="/semua-berita/"><?php echo lang('news_latest'); ?></a></li> 
               </ul>

            </li>
             

            <li><a href="/hubungi-kami" class="navbar-link"><?php echo lang('contact_us'); ?></a></li>
        </ul>

    </div>  <!-- end mn -->

      </nav>

      <div class="header-actions">

        
        <button class="header-action-btn" aria-label="Open search" data-search-toggler>
          <ion-icon name="search-outline"></ion-icon>
        </button>
    

 <a href="https://www.umitra.ac.id/simpt/index.php/sipenerimaan/home"   class="btn2 btn2-primary mPendaftaran" style="height:20px;">
  <ion-icon name="person-outline" aria-hidden="true" role="img"  ></ion-icon>
            <span class="span mPendaftaran">  <?php echo lang('register'); ?></span>

            
          </a>
<!---->
  <a class="button-text-with-icon" href="#"  style="background-color:#3737FF" onclick="toggleLanguageMenu();">
    <i class="fas fa-globe fa-2x" style="margin-top:10px;"></i><span class="button-text"></span></a>
	
        <div id="language-menu" class="language-menu">
			<a class="language-item" href="?lang=id">ID</a>
             <a class="language-item" href="?lang=en">EN</a>
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
        <input type="search" name="search" placeholder="<?php echo lang('search_placeholder'); ?>" aria-label="Search" class="search-field">

        <button type="submit" class="search-submit" aria-label="Submit">
          <ion-icon name="search-outline"></ion-icon>
        </button>
       </form>
      </div>

    </div>
  </div>



  <?php include "./content.php" ;?>


<div style="  background-color: #231F41;margin-bottom:-10px;" data-negative="false">

 <!--
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 210"><path fill="#231F41" fill-opacity="1" d="M0,128L60,128C120,128,240,128,360,138.7C480,149,600,171,720,186.7C840,203,960,213,1080,202.7C1200,192,1320,160,1380,144L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
 -->
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

          <a href="./" class="logo">
 <img    width="300"  src="https://dummy.umitra.ac.id/assets/images/logo.png" class="img-responsive" alt="<?php echo lang('university_name'); ?>" decoding="async" style="max-width:450px ;">

           </a>

           
          <div class="col-md-12" style="padding-top:0px;margin-top:20px;margin-bottom:30px;padding: 0px 0px 0px 0px;border :7px solid white;border-radius:10px; ">
                            
                                
                                     
 <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1986.1462720201985!2d105.24111394351651!3d-5.372282041479407!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40dab66bc07565%3A0x8a9127a26af1e84e!2sMitra+Lampung+University!5e0!3m2!1sen!2sid!4v1514356311699" style="padding-top:5px;background-color:white;width:100%;margin:  0px;" height="225" frameborder="0" allowfullscreen=""></iframe>
 
                              
                          </div>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link-fb ">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link-ig">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link-tiktok">
                <ion-icon name="logo-tiktok"></ion-icon>
              </a>
            </li>

              <li>
              <a href="#" class="social-link-yt">
                <ion-icon name="logo-youtube"></ion-icon>
              </a>
            </li>


          </ul>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title"><?php echo lang('head_office'); ?></p>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

              <span class="span"><?php echo lang('p3tk'); ?></span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

              <span class="span"><?php echo lang('plpsi'); ?></span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

              <span class="span"><?php echo lang('phmk'); ?></span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

              <span class="span"><?php echo lang('pkpio'); ?></span>
            </a>
          </li>

     
          </li>

           <li>
            <a href="#" class="footer-link">
              <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

              <span class="span"><?php echo lang('perpustakaan'); ?></span>
            </a>
          </li>

     
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title"><?php echo lang('lembaga_badan'); ?></p>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

              <span class="span"><?php echo lang('penelitian_pengabdian'); ?></span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

              <span class="span"><?php echo lang('badan_penjamin_mutu'); ?></span>
            </a>
          </li>

            <li>
            <p class="footer-list-title"><?php echo lang('biro'); ?></p>
          </li>

        
      

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

              <span class="span"><?php echo lang('biro_administrasi_akademik'); ?></span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

              <span class="span"><?php echo lang('biro_administrasi_sdm'); ?></span>
            </a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title"><?php echo lang('contact_info'); ?></p>
          </li>

          <li class="footer-item">
            <ion-icon name="location-outline" aria-hidden="true"></ion-icon>

            <address class="footer-link">
            <?php echo lang('address'); ?>
            </address>
          </li>

          <li class="footer-item">
            <ion-icon name="call" aria-hidden="true"></ion-icon>

            <a href="tel:+13647657839" class="footer-link"> <?php echo lang('phone'); ?> </a>
          </li>

          <li class="footer-item">
            <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>

            <a href="mailto:info@umitra.ac.id" class="footer-link"><?php echo lang('email'); ?></a>
          </li>

         <li class="footer-item">
            <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
           <a href="mailto:umitra_indonesia@umitra.ac.id" class="footer-link"><?php echo lang('secondary_email'); ?></a>
          </li>

        </ul>

      </div>

      <div class="footer-bottom">
        <p class="copyright">
          &copy 2024 <?php echo lang('university_name'); ?>. All Rights Reserved.
        </p>
      </div>

    </div>
  </footer>



  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="Back to top" data-back-top-btn>
    <ion-icon name="arrow-up"></ion-icon>
  </a>




  <!-- 
    - custom js link
  -->
  <script src="<?php nmurl();?>assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>

  <!-- FlexSlider -->
  <script defer src="assets/js/jquery.flexslider.js"></script>

  <script type="text/javascript">
    
    $(window).load(function(){
  
      // Call fitVid before FlexSlider initializes, so the proper initial height can be retrieved.
      $(".flexslider")
         
        .flexslider({
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



   //============================================================
   var images = [
   		'https://dummy.umitra.ac.id/assets/images/hero-bg_0.jpg',
     
      'https://dummy.umitra.ac.id/assets/images/hero-bg_3.jpg',
      'https://dummy.umitra.ac.id/assets/images/hero-bg1.jpg'
       
    ];

/*
    var currentIndex = 0;

    function changeBackground() {
      currentIndex = (currentIndex + 1) % images.length;
      var newImage = images[currentIndex];
      var $hero = $('.hero');

      $hero.addClass('fade-in');

      // Ubah gambar background pada elemen ::before
      $hero.css('background-image', 'url(' + newImage + ')');

      

      setTimeout(function() {
        $hero.removeClass('fade-in');
      }, 1000);  
    }


    function checkMobile() {
          if (window.matchMedia("(max-width: 767px)").matches) {
             
          } else {
             setInterval(changeBackground, 5000); 


          }
        }
   

    checkMobile();

    

    $(window).resize(function() {
      checkMobile();
    });
 */


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

        // Trigger the split animation
        $overlay.addClass('left');

        // Remove the split animation class and update the hero background image
        setTimeout(function() {
            $hero.css('background-image', 'url(' + newImage + ')');
            $overlay.removeClass('left').addClass('right');
        }, 1000); // Adjust this to match the duration of your animation

        // Reset the overlay position after animation
        setTimeout(function() {
            $overlay.removeClass('right').css('background-image', 'none');
        }, 1000); // Ensure this is long enough for the animation to complete
    }

    
          
    // Initial setup
    $('.hero').css('background-image', 'url(' + images[currentIndex] + ')');
    $('.overlay').css('background-image', 'url(' + images[currentIndex] + ')');

   
              // Change background image every 7 seconds
             setInterval(changeBackground, 7000);


          }
        }

   

    checkMobile();

    
    $(window).resize(function() {
      checkMobile();
    });


    //==========================================================









});
 
 
  </script>
 

      
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

<script>
  function toggleLanguageMenu() {
            const menu = document.getElementById('language-menu');
            menu.classList.toggle('show');
  }
</script> 
  


</body>

</html>
