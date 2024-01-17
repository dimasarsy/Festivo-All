<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Festiverse | Home</title>

  <link rel="icon" href="assets/img/logo.png" type="image/png">

  <link href="../vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style3.css" rel="stylesheet">
  
</head>

<body>

<main>

<!-- ===================== HEADER =============================== -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <a href="index.php"><img src="assets/img/logo.png" alt=""></a>
      </div>

      <!-- Menu Bar -->
      <nav id="navbar" class="navbar">
        <ul>

          <li><a class="active" href="index.php">Home</a></li>
          <li><a href="festival/index.html">Festival</a></li>
          <li><a href="lineup/index.html">Line-up</a></li>

          <li class="dropdown"><a href="#"><span>Merchant</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="">Food</a></li>
              <li><a href="">Merchandise</a></li>
            </ul>
          </li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle" style="color: white;"></i>
      </nav>

      <!-- Informasi User -->
      <nav id="navbar" class="navbar">
        <a class="btn-getstarted scrollto" style="color: white;" href="">Profil</a>
      </nav>
<!--       <nav class="navbar">
        <ul>
          <li class="dropdown">
            <a href="#">
              <img class="img-profile rounded-circle" src="assets/img/adminis.png" style="width:30px;">
              <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
              <i class="bi bi-chevron-down"></i>
            </a>
            
            <ul>
              <li><a class="dropdown-item" href="user/halaman_operator.php?top=datauser.php">My Account</a></li>
              <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a></li>
            </ul>
          </li>
        </ul>
      </nav> -->


      <!-- <a href="#" data-toggle="modal" data-target="#use">
        <i class="fas fa-question-circle"></i>
      </a> -->

    </div>
  </header>
<!-- ===================== End of Header =============================== -->

  <section class="hero-section" id="hero">

    <div class="wave">

      <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
            <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z" id="Path"></path>
          </g>
        </g>
      </svg>

    </div>

    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 hero-text-image">

          <div class="row">
            <div class="col-lg-8 text-center text-lg-start">
              <h2 data-aos="fade-right">Festival Virtual</h2>
              <h3 class="mb-5" data-aos="fade-right" data-aos-delay="100">3 Days . 128 Artists . 947 Shops</h3>

              <div class="d-flex" data-aos-delay="600">
                <a href="" class="btn-get-started scrollto">Buy Ticket Now!</a>
              </div>
            </div>

            <div class="col-lg-4 iphone-wrap">
              <img src="assets/img/poligon.png" alt="Image" class="phone-1" data-aos="fade-left" data-aos-delay="600">
              <div class="countdown" data-aos="zoom-out">
                <div id="hari" class="locate">NA</div>
                <div id="jam" class="locate">NA</div>
                <div id="menit" class="locate">NA</div>
                <div id="detik" class="locate">NA</div>
              </div>

              <script type="text/javascript">

                var countDate = new Date('Dec 23 2022 19:00:00').getTime();

                function newYear(){
                  var now = new Date().getTime();
                  gap = countDate - now;

                  var detik = 1000;
                  var menit = detik * 60;
                  var jam = menit * 60;
                  var hari = jam * 24;

                  var h = Math.floor(gap / (hari));
                  var j = Math.floor( (gap % (hari)) / (jam) );
                  var m = Math.floor( (gap % (jam))  / (menit) );
                  var d = Math.floor( (gap % (menit))  / (detik) );

                  document.getElementById('hari').innerText = h;
                  document.getElementById('jam').innerText = j;
                  document.getElementById('menit').innerText = m;
                  document.getElementById('detik').innerText = d;
                }

                setInterval( function(){
                  newYear();
                }, 1000);

              </script>
            </div>
          </div>

        </div>
      </div>
    </div>

  </section>
<!-- ====================== End of Hero Section =============================== -->

<!-- ======= ================== FESTIVAL Section ============================== -->

  <section id="festival" class="about">
      <div class="container">
        <div class="row align-items-center">

          <div class="col-md-6" data-aos="fade-left">
            <img src="assets/img/festival.png" alt="Image" class="img-fluid">
          </div>
          
          <div class="col-md-6 me-auto oder1">
            <div class="titlepage text_align_left"><br>
              <h2 class="mb-4" data-aos="fade-down" data-aos-delay="300">ABOUT US</h2>
              <p class="mb-4" data-aos="fade-left" data-aos-delay="400">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. [...]</p>
              <a class="read_more" href="festival/index.html" data-aos="fade-up">More Information</a>
            </div>
          </div>

          
        </div>
      </div>
    </section>

<!-- ========================= End of Festival Section ============================== -->

<!-- ============================= VIDEO Section ==================================== -->
  <section id="video" class="video">
    <div class="container">
      <div class="section-title">
        <h2 data-aos="fade-left">TEASER</h2>
      </div>
      <video width="747" height="420"  style=" display: block; margin-left: auto; margin-right: auto;" controls="controls" type="video/mp4" preload="none"><source src="assets/video/teaser.mp4">Your browser does not support the video tag.</video>
    </div>
  </section>

<!-- ============================= End Video Section ================================ -->

<!-- ============================= GAMES Section ===================================== -->
  <section id="games" class="departments">
    <div class="container">

      <div class="section-title">
        <h2 data-aos="fade-right">GAMES</h2>
      </div>

      <div class="row" data-aos="fade-right">
        <div class="col-lg-3">
          <ul class="nav nav-tabs flex-column">
            
            <li class="nav-item">
              <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1" style="color: #000033;">Grid Runners</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-2" style="color:#000099">Duo Parkour</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-3" style="color: #3333ff">Protect Mosini</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-4" style="color:#9999ff">1000 Wave Challenge</a>
            </li>

          </ul>
        </div>

        <div class="col-lg-9 mt-4 mt-lg-0">
          <div class="tab-content">
            
            <div class="tab-pane active show" id="tab-1">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3 style="background-color: #000033;">GRID RUNNERS</h3>
                  <p>
                    Grid Runners is back, and now we’ve gone PRO. Craft, build, fight and parkour your way to victory with unique Minecraft challenge rooms and courses. Compete with your friends or against the clock to become the ultimate MC champion!<br><br>

                    +Create custom courses and play your way<br>
                    +Weird and wonderful Wacky Rooms<br>
                    +BILLIONS of course combinations! diagnosis konfirmasi
                  </p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/games1.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>

            <div class="tab-pane" id="tab-2">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3 style="background-color:#000099">DUO PARKOUR</h3>
                  <p>
                    Do you like Parkour and are looking for a unique challenge to play in multiplayer? Duo Parkour brings a fun mode in which you have to combine skill and pvp in a frantic race through different biomes and traps.<br><br>

                    - More than 10 different biomes<br>
                    - 2 main game modes <br>
                    - More than 15 different traps <br>
                    - Multiplayer! <br>
                    - Includes 2 skins
                  </p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/games2.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>

            <div class="tab-pane" id="tab-3">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3 style="background-color: #3333ff">PROTECT MOSINI</h3>
                  <p>
                   The fortress where Mosini is located is threatened by 19 different huge mutant monsters. We have to form a security team to prevent Mosini from being attacked by monsters!
                   <br>Players choose their own profession (each player can choose the same or different profession) to prevent Mosine from being killed by monsters, hold on to the behemoth’s attack, and guard to the end.
                  </p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/games3.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>

            <div class="tab-pane" id="tab-4">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3 style="background-color:#9999ff">1000 WAVE CHALLENGE</h3>
                  <p>
                    Do you have what it takes to complete the ultimate wave challenge? Choose your global enchantments and battle through 1,000 waves!<br><br>

                    - Singleplayer or Multiplayer
                  </p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/games4.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
  </section>
<!-- ============================= End of Games Section ===================================== -->

<!-- ============================--= LINEUP Section ========================================= -->
  <section id="tentang" class="team section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2 data-aos="fade-right">LINE UP</h2>
        <h3 data-aos="fade-left">Main Performance</h3>
      </div>

      <div class="row">

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="member">
            <div class="member-img">
              <a href="lineup/index.html#day1">
                <img src="assets/img/artis/ungu1.jpg" class="img-fluid" alt="">
                <div class="social-team">
                  <h2>Ungu</h2>
                  <h2 style="font-size: 24px;">23 Dec</h2>
                </div>
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="member">
            <div class="member-img">
              <a href="lineup/index.html#day2">
                <img src="assets/img/artis/dmasiv1.jpg" class="img-fluid" alt="">
                <div class="social-team">
                  <h2>D'Masiv</h2>
                  <h2 style="font-size: 24px;">24 Dec</h2>
                </div>
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
          <div class="member">
            <div class="member-img">
              <a href="lineup/index.html#day3">
                <img src="assets/img/artis/metalica1.jpg" class="img-fluid" alt="">
                <div class="social-team">
                  <h2>Metallica</h2>
                  <h2 style="font-size: 24px;">25 Dec</h2>
                 </div>
               </a>
             </div>
          </div>
        </div>


      </div>

    </div>
  </section>
<!-- ============================= End Lineup Section ================================== -->
  <br><br>
<!-- ============================= MAPS Section ======================================== -->

  <div class="section-title">
    <h2 data-aos="fade-left">SITE MAP</h2>
  </div>

  <section class="maps" id="hero">
    <div class="marquee">
      <p> FESTIVAL LAND, DIGITAL WORLD → FESTIVERSE → DECEMBER 23-25, 2022</p><p> FESTIVAL LAND, DIGITAL WORLD → FESTIVERSE → DECEMBER 23-25, 2022</p>
    </div>
    <img class="maps" src="assets/img/map.png">
    <div class="marquee">
      <p> FESTIVAL LAND, DIGITAL WORLD → FESTIVERSE → DECEMBER 23-25, 2022</p>
    </div>
  </section>
<!-- =================================End of Maps ======================================== -->

<!-- =============================== SPONSOR Section ===================================== -->
  <section id="sponsor" class="doctors">
    <div class="container">

      <div class="section-title">
        <h2 data-aos="fade-left">OFFICIAL SPONSORS</h2>
      </div>

      <div class="row" data-aos="fade-up">

        <div class="col-lg-3 col-sm-6"><a href="https://www.blibli.com/">
          <div class="member d-flex align-items-start">
            <div class="pic"><img src="assets/img/sponsor/blibli.png" class="img-fluid" alt=""></div>
          </div>
        </div></a>

        <div class="col-lg-3 col-sm-6" ><a href="https://www.gojek.com/id-id/">
          <div class="member d-flex align-items-start">
            <div class="pic"><img src="assets/img/sponsor/gojek.png" class="img-fluid" alt=""></div>
          </div>
        </div></a>

        <div class="col-lg-3 col-sm-6"><a href="https://shopee.co.id/">
          <div class="member d-flex align-items-start">
            <div class="pic"><img src="assets/img/sponsor/shopee.png" class="img-fluid" alt=""></div>
          </div></a>
        </div>

        <div class="col-lg-3 col-sm-6"><a href="https://www.tiket.com/">
          <div class="member d-flex align-items-start">
            <div class="pic"><img src="assets/img/sponsor/tiket.png" class="img-fluid" alt=""></div>
          </div></a>
        </div>

      </div>
    </div>
  </section>
<!-- =============================== End of Sponsor Section ===================================== -->

<!-- =================================== MEDPART Section ======================================== -->
  <div class="container medpart">

    <div class="section-title">
      <h2 data-aos="fade-up" style="font-size: 24px;">MEDIA PARTNER</h2>
    </div>

    <div class="row" data-aos="fade-left">

      <div class="col-lg-2 col-sm-4">
        <a href="">
          <div class="pic"><img src="assets/img/medpart/m1.png" class="img-fluid" alt=""></div>
        </a>
      </div>

      <div class="col-lg-2 col-sm-4">
        <a href="">
          <div class="pic"><img src="assets/img/medpart/m2.png" class="img-fluid" alt=""></div>
        </a>
      </div>

      <div class="col-lg-2 col-sm-4">
        <a href="">
          <div class="pic"><img src="assets/img/medpart/m3.png" class="img-fluid" alt=""></div>
        </a>
      </div>

      <div class="col-lg-2 col-sm-4">
        <a href="">
          <div class="pic"><img src="assets/img/medpart/m4.png" class="img-fluid" alt=""></div>
        </a>
      </div>

      <div class="col-lg-2 col-sm-4">
        <a href="">
          <div class="pic"><img src="assets/img/medpart/m5.png" class="img-fluid" alt=""></div>
        </a>
      </div>

      <div class="col-lg-2 col-sm-4">
        <a href="">
          <div class="pic"><img src="assets/img/medpart/m6.png" class="img-fluid" alt=""></div>
        </a>
      </div>

    </div>
      
  </div>

  <div class="container">

    <div class="row" data-aos="fade-right">
      
      <div class="col-lg-2 col-sm-4">
        <a href="">
          <div class="pic"><img src="assets/img/medpart/m7.png" class="img-fluid" alt=""></div>
        </a>
      </div>

      <div class="col-lg-2 col-sm-4">
        <a href="">
          <div class="pic"><img src="assets/img/medpart/m8.png" class="img-fluid" alt=""></div>
        </a>
      </div>

      <div class="col-lg-2 col-sm-4">
        <a href="">
          <div class="pic"><img src="assets/img/medpart/m9.png" class="img-fluid" alt=""></div>
        </a>
      </div>

      <div class="col-lg-2 col-sm-4">
        <a href="">
          <div class="pic"><img src="assets/img/medpart/m10.png" class="img-fluid" alt=""></div>
        </a>
      </div>

      <div class="col-lg-2 col-sm-4">
        <a href="">
          <div class="pic"><img src="assets/img/medpart/m11.png" class="img-fluid" alt=""></div>
        </a>
      </div>

      <div class="col-lg-2 col-sm-4">
        <a href="">
          <div class="pic"><img src="assets/img/medpart/m12.png" class="img-fluid" alt=""></div>
        </a>
      </div>
    </div>
      
  </div>

<!-- =================================== End of Medpart Section ======================================== -->

</main>

<!-- End #main --><br><br>

<!-- ====================================== Footer ================================================= -->
  <footer id="footer">
    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Festiverse</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by FESTIVAL TEAM
        </div> 
      </div>

      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>

    </div>
  </footer>
<!-- ========================================== End Footer ============================================ -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- ======== Logout Modal =========== -->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          Logout 
        </div>
        <div class="modal-body">Apakah yakin anda akan keluar dari Sistem ?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
          <a class="btn btn-primary" href="../logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>


  <!-- Bootstrap core JavaScript -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a>

    <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  
  <!-- Custom scripts for all pages-->
  <script src="assets/js/main.js"></script>

  <!-- Animate-->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>AOS.init();</script>
</body>

</html>