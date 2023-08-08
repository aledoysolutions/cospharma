<?php

  include('acms/connection/connect.php');

  function get_content($title)
  {
    global $db;
      $query = "select * from pages where page = 'About Us Page' and title = '$title'";
      $result = mysqli_query($db, $query);
      $row = mysqli_fetch_array($result);
      return $row['content'];
  }

  function get_image1($title)
  {
    global $db;
      $query = "select * from pages where page = 'About Us Page' and title = '$title'";
      $result = mysqli_query($db, $query);
      $row = mysqli_fetch_array($result);
      return $row['banner_image'];
  }

  function get_image2($title)
  {
    global $db;
      $query = "select * from pages where page = 'About Us Page' and title = '$title'";
      $result = mysqli_query($db, $query);
      $row = mysqli_fetch_array($result);
      return $row['video_url'];
  }
?>

<!doctype html>
<html lang="zxx">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>About Us | Cospharma Limited</title>
    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700;1,600&display=swap" rel="stylesheet">
    <!-- google fonts -->
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link rel="icon" href="assets/images/icon.png"/>
    <!-- Template CSS -->
    <script src="//code.jivosite.com/widget/GjpO6zzFQB" async></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-7CZCVTDNS6"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-7CZCVTDNS6');
</script>
  </head>
  
  <body>
    <!--header-->
    <?php include ("menu.php") ; ?>
    <!-- //header -->
  <!-- about breadcrumb -->
  <section class="w3l-about-breadcrumb text-left">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4" style="background: url(assets/images/abban.jpg) no-repeat;">
      <div class="container py-2">
        <h2 class="title">About Us</h2>
        <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="index.php">Home</a></li>
          <!-- <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> About </li> -->
        </ul>
      </div>
    </div>
  </section>
  <!-- //about breadcrumb -->
  <!-- /about-6-->
  <section class="w3l-cta4 py-5">
      <div class="container py-lg-5">
        <div class="ab-section">
            <div class="row">
              <div class="col-md-6 pr-lg-5">
                <!-- <h6 class="sub-title">About Us</h6> -->
                <h3 class="hny-title"><?php echo $row['title'];?></h3>
                <p class="py-3"><?php echo substr(get_content('Cospharma Limited'),0,390); ?></p>
              </div>
              <div class="col-md-6 mt-md-0 mt-4">
                <div class="row">
                  <div class="col-md-6 mt-md-0 mt-4">
                  <img src="acms/upload/<?php echo get_image1('Cospharma Limited'); ?>" class="img-fluid" alt="">
                  </div>
                    
                  <div class="col-md-6 mt-md-0 mt-4">
                    <img src="acms/upload/<?php echo get_image2('Cospharma Limited'); ?>" class="img-fluid" alt="">
                  </div>
                </div>
              </div>
              <div class="container">
              <p class="py-3"><?php echo substr(get_content('Cospharma Limited'),391); ?></p>
              </div>
            </div> <br><br>

            <div class="row">
              <div class="col-md-6 pr-lg-5">
                <p class="py-3"> <b>DIVERIFICATION</b> <br><br> <?php echo substr(get_content('DIVERIFICATION'),0,342); ?></p>
              </div>
              <div class="col-md-6 mt-md-0 mt-4">
                <div class="row">
                  <div class="col-md-6 mt-md-0 mt-4">
                    <img src="acms/upload//upload/<?php echo get_image1('DIVERIFICATION'); ?>" class="img-fluid" alt="">
                  </div>
                  <div class="col-md-6 mt-md-0 mt-4">
                    <img src="acms/upload//upload/<?php echo get_image2('DIVERIFICATION'); ?>" class="img-fluid" alt="">
                  </div>
                </div>
              </div>
              <div class="container">
              <p class="py-3"><?php echo substr(get_content('DIVERIFICATION'),342); ?></p>
              </div>
            </div> <br><br>

            <div class="row">
              <div class="col-md-6 pr-lg-5">
                <p class="py-3"> <b>SUMMARY</b> <br><br> <?php echo get_content('SUMMARY'); ?> </p>
              </div>
              <div class="col-md-6 mt-md-0 mt-4">
                <div class="row">
                  <div class="col-md-6 mt-md-0 mt-4">
                    <img src="acms/upload//upload/<?php echo get_image1('SUMMARY'); ?>" class="img-fluid" alt="">
                  </div>
                  <div class="col-md-6 mt-md-0 mt-4">
                    <img src="acms/upload//upload/<?php echo get_image2('SUMMARY'); ?>" class="img-fluid" alt="">
                  </div>
                </div>
              </div>
            
            </div>
        </div>

      </div>
  </section>
  <!-- //about-6-->
   <!-- /content-6-->
   <section class="w3l-content-6 py-5" id="why">
    <div class="container py-lg-5">
      <div class="row">
        <div class="col-lg-4 content-6-left">
          <!-- <h6 class="sub-title">Why Choose Us</h6> -->
          <h3 class="hny-title">Mission</h3> <br>
          <p class="mb-3"><?php echo get_content('MISSION'); ?> .</p>
        </div>
        <!-- <div class="col-lg-4 content-6-right mt-lg-0 mt-4">
        <h3 class="hny-title">Values</h3> <br>
            <p class="mb-3">To create a products that can provide everything professional hairdressers, colorists, stylists, and consumers want and desire: unique and high-quality
            cosmetic products that are owned and manufactured in Nigeria, as well as a firm that provides excellent customer service..</p>
            
        </div> -->
        <div class="col-lg-4 content-6-right mt-lg-0 mt-4">
        <h3 class="hny-title">Vision</h3> <br>
            <p class="mb-3"><?php echo get_content('VISION'); ?> </p>
            
        </div>
      </div>
    </div>
</section> <br>
<!-- //content-6-->
  <!-- stats -->
  <!-- <section class="w3l-statshny py-5" id="stats">
    <div class="container py-lg-5 py-md-4">
      <div class="w3-stats-inner-info">
        <div class="row">
          <div class="col-lg-4 col-6 stats_info counter_grid text-left">
            <span class="fa fa-smile-o"></span>
            <p class="counter">1730</p>
            <h4>Happy Customers</h4>
          </div>
          <div class="col-lg-4 col-6 stats_info counter_grid1 text-left">
            <span class="fa fa-users"></span>
            <p class="counter">730</p>
            <h4>Projects</h4>
          </div>
          <div class="col-lg-4 col-6 stats_info counter_grid mt-lg-0 mt-5 text-left">
            <span class="fa fa-database"></span>
            <p class="counter">30</p>
            <h4>branches</h4>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- //stats -->
  <!-- team -->
  <!-- <section class="w3l-team" id="team">
    <div class="team-block py-5">
      <div class="container py-lg-5">
        <div class="title-content text-center mb-lg-3 mb-4">
          <h6 class="sub-title">Our Team</h6>
          <h3 class="hny-title">Management Team</h3>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 mt-lg-5 mt-4">
            <div class="box16">
              <a href="#url"><img src="assets/images/team1.jpg" alt="" class="img-fluid" /></a>
              <div class="box-content">
                <h3 class="title"><a href="#url">Jane Doe</a></h3>
                <span class="post">Designation</span>
                <ul class="social">
                  <li>
                    <a href="#" class="facebook">
                      <span class="fa fa-facebook-f"></span>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="twitter">
                      <span class="fa fa-twitter"></span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mt-lg-5 mt-4">
            <div class="box16">
              <a href="#url"><img src="assets/images/team1.jpg" alt="" class="img-fluid" /></a>
              <div class="box-content">
                <h3 class="title"><a href="#url">Jane Doe</a></h3>
                <span class="post">Designation</span>
                <ul class="social">
                  <li>
                    <a href="#" class="facebook">
                      <span class="fa fa-facebook-f"></span>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="twitter">
                      <span class="fa fa-twitter"></span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mt-lg-5 mt-4">
            <div class="box16">
              <a href="#url"><img src="assets/images/team1.jpg" alt="" class="img-fluid" /></a>
              <div class="box-content">
                <h3 class="title"><a href="#url">Jane Doe</a></h3>
                <span class="post">Designation</a></span>
                <ul class="social">
                  <li>
                    <a href="#" class="facebook">
                      <span class="fa fa-facebook-f"></span>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="twitter">
                      <span class="fa fa-twitter"></span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mt-lg-5 mt-4">
            <div class="box16">
              <a href="#url"><img src="assets/images/team1.jpg" alt="" class="img-fluid" /></a>
              <div class="box-content">
                <h3 class="title"><a href="#url">Jane Doe</a></h3>
                <span class="post">Designation</a></span>
                <ul class="social">
                  <li>
                    <a href="#" class="facebook">
                      <span class="fa fa-facebook-f"></span>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="twitter">
                      <span class="fa fa-twitter"></span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- //team -->
  <!-- home page video popup section -->
<section class="w3l-index5" id="about">
    <div class="new-block py-5">
      <div class="container py-lg-5">
        <div class="middle-section text-center">
          <div class="section-width">
            <!-- <h6 class="sub-title text-center">Video</h6> -->
            <!-- <h3 class="hny-title">People-oriented spaces that ensure the best quality of your everyday life</h3> -->
            <p class="mt-3"><?php echo get_content('Video Link'); ?></p>
          </div>
          <div class="history-info mt-5">
            <div class="position-relative">
              <img src="assets/images/banner1.jpg" class="img-fluid radius-image video-popup-image" alt="video-popup">

              <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center position-absolute">
                <span class="video-play-icon">
                  <span class="fa fa-play"></span>
                </span>
              </a>

               <!-- dialog itself, mfp-hide class is required to make dialog hidden  -->
              <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
              <iframe width="853" height="480" src="https://www.youtube.com/embed/qkFyqsg4ygs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        
          <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
          <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
            <iframe src="https://player.vimeo.com/video/265410015?title=0&byline=0&portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </section> 
  <!-- //home page video popup section -->

  <!-- footer7 block -->
  <?php include ("footer.php") ; ?>
      <!-- //footer -->
      <!-- move top -->
      <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-angle-up"></span>
      </button>
      <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
          scrollFunction()
        };

        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
          } else {
            document.getElementById("movetop").style.display = "none";
          }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
      </script>
      <!-- //move top -->
      <!-- /noscroll -->
      <script>
        $(function () {
          $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
          })
        });
      </script>
      <!-- //noscroll -->
      <!-- //footer -->
    </div>
  </section>
  <!-- //footer7 block -->
  <!-- Template JavaScript -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/theme-change.js"></script>
  
  <!-- video popup -->
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script>
    $(document).ready(function () {
      $('.popup-with-zoom-anim').magnificPopup({
        type: 'inline',

        fixedContentPos: false,
        fixedBgPos: true,

        overflowY: 'auto',

        closeBtnInside: true,
        preloader: false,

        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in'
      });

      $('.popup-with-move-anim').magnificPopup({
        type: 'inline',

        fixedContentPos: false,
        fixedBgPos: true,

        overflowY: 'auto',

        closeBtnInside: true,
        preloader: false,

        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-slide-bottom'
      });
    });
  </script>
  <!-- //video popup -->
  <!-- stats number counter-->
  <script src="assets/js/jquery.waypoints.min.js"></script>
  <script src="assets/js/jquery.countup.js"></script>
  <script>
    $('.counter').countUp();
  </script>
  <!-- //stats number counter -->
  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->

  <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>