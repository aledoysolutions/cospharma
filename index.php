<?php
  include('acms/connection/connect.php');

  // $query = "select * from home_banner";
  // $result = mysqli_query($db, $query);
  // // $row =  mysqli_fetch_array($result);

?>

<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Cospharma Limited | Home</title>
  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700;1,600&display=swap"
    rel="stylesheet">
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
  <!-- main-slider -->
  <section class="w3l-main-slider" id="home">
    <div class="companies20-content">
      <div class="owl-one owl-carousel owl-theme">
              <?php
                $query = "select * from home_banner";
                $result = mysqli_query($db,$query);
                $num_rows = mysqli_num_rows($result);
                
                for($i=0; $i<$num_rows; $i++)
                {
                   $rows = mysqli_fetch_array($result);
              ?>
        <div class="item">
          <li>
            <div class="slider-info banner-view bg bg2" style="background-image:url('acms/upload/<?php echo $rows['image']?>')">
              <div class="banner-info">
                <div class="container">
                  <div class="banner-info-bg text-center">
                    <!-- <p>Better living</p> -->
                    <h5><?php echo $rows['title'];?></h5>
                    <!-- <a href="about.php" class="btn btn-white">Read More</a> -->
                  </div>
                </div>
              </div>
            </div>
          </li>
        </div>

        <?php } ?>
        
      </div>
    </div>
  </section>
  <!-- /main-slider -->
  <!--/grids-->
  <section class="w3l-grids-3 py-5" id="about">
    <div class="container py-md-5">
      <div class="row bottom-ab-grids align-items-center">
        <div class="col-lg-6 bottom-ab-right mb-lg-0 mb-5 pr-lg-5">
          <?php 

              $query = "select * from pages where id = '1' ";
              $result = mysqli_query($db,$query);
              $num_rows = mysqli_num_rows($result);

              for($i=0; $i<$num_rows; $i++)
              {
                $rows = mysqli_fetch_array($result);
          ?>
          <img src="acms/upload/<?php echo $rows['banner_image'];?>" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 bottom-ab-left">
          <h6 class="sub-title">About Us</h6>
          <h3 class="hny-title">
          <?php echo $rows['title'];?></h3>
          <p class="my-3 pr-lg-4"><?php echo $rows ['content'];?> </p>
          <a href="about.php" class="btn btn-style btn-secondary mt-4">Read More</a>
        </div>

        <?php
            }?>

      </div>
    </div>

  </section>
  <!--//grids-->
  <!--/services-->
  <section class="w3l-services1">
    <div id="content-with-photo4-block" class="services1hny py-5">
      <div class="container py-md-5">
        <div class="cwp4-two row align-items-center">
          <div class="cwp4-text col-lg-4 mb-lg-0 mb-5">
            <!-- <h6 class="sub-title">what We Do</h6> -->
            <h3 class="hny-title">What We Offer</h3>
          </div>
          <div class="cwp4-image col-lg-8">
            <div class="grids4-info">

              <p>Our hair care product are expertly manufactured and packaged at Cospharma factory. Our manufacturing facility has a variety of blending vessels as well as experienced product development chemists that formulate the best hair care products. Our product are scaled-up and manufactured by our skilled compounders to specifications while using current Good Manufacturing Practice regulations (cGMP) protocols. With our assortment of modular filling equipment, they are well packaged to meet standards.</p>

            </div>
          </div>
        </div>
        <div class="w3l-bottom-grids-6 py-5 mt-lg-5">
          <div class="grids-area-hny main-cont-wthree-fea row">
          <div class="col-lg-4 col-md-6 grids-feature mt-lg-0 mt-4">
              <div class="area-box" style="background: url(assets/images/pg.jpg) no-repeat;">
                <span class="fa fa-pencil-square-o"></span>
                <h4><a href="gallery.php" class="title-head" style="color: #fff;">Products</a></h4> 
                <!-- <p> <a href="career.php"style="color: #fff;">Join our team of great minds, and begin an exhilarating career.</a></p> -->
              </div>
            </div>
            <div class="col-lg-4 col-md-6 grids-feature">
              <div class="area-box" style="background: url(assets/images/shop.jpg) no-repeat;">
                <span class="fa fa-cubes"></span>
                <h4><a href="form.php" class="title-head" style="color: #fff;">Order Online</a></h4>
                <!-- <p> <a href="form.php" style="color: #fff;">Shampoo, conditioner, color, styling products, and hair oil are the major categories of hair care.</a></p> -->
              </div>
            </div>
            <div class="col-lg-4 col-md-6 grids-feature mt-md-0 mt-4">
              <div class="area-box" style="background: url(assets/images/dist.jpg) no-repeat;">
                <span class="fa fa-american-sign-language-interpreting"></span>
                <h4><a href="contact.php" class="title-head" style="color: #fff;">Become A Distributor</a></h4> 
                <!-- <p> <a href="contact.php"style="color: #fff;">Natural products for best results. </a></p> -->
              </div>
            </div>
            
            <!-- <div class="col-lg-4 col-md-6 grids-feature mt-4">
              <div class="area-box">
                <span class="fa fa-linode"></span>
                <h4><a href="#feature" class="title-head">Site Selection</a></h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 grids-feature mt-4">
              <div class="area-box">
                <span class="fa fa-briefcase"></span>
                <h4><a href="#feature" class="title-head">Budgeting</a></h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 grids-feature mt-4">
              <div class="area-box">
                <span class="fa fa-thumbs-o-up"></span>
                <h4><a href="#feature" class="title-head">Exact Results</a></h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
              </div>
            </div> -->

          </div>
        </div>


      </div>
    </div>
    </div>
  </section>
  <!--//services-->


  <!--//grids2-->
    <!-- call -->
  <section class="w3l-call py-5" id="book">
    <div class="container py-lg-5 py-md-4">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h4 class="mb-2">Book Now</h4>
                <p class="mb-2">Call Us</p>
                <p><span class="fa mr-1 fa-phone"></span> <a href="tel:+234 810 9522 262"> +234 810 9522 262</a></p>
                <p class="mt-4 pr-lg-5 mr-lg-5">The relax range of products are positioned to confer social confidence, restore healthy hair and give style and distinction to the users. Overall, it is an admixture of beauty enhancers at pocket friendly prices.</p>
                <a class="btn btn-style btn-secondary mt-4" href="gallery.php"> Explore Products </a>
                <a href="contact.php" class="btn btn-style btn-secondary mt-4">Contact Us</a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-8 mt-md-0 mt-5">
                <img src="assets/images/blog3.jpg" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</section>
  <!-- call -->
  <!-- stats -->
  <!-- <section class="w3l-stats py-5" id="stats">
    <div class="gallery-inner container py-lg-0 py-3">
      <div class="row stats-con pb-lg-3">
        <div class="col-lg-3 col-6 stats_info counter_grid">
          <p class="counter">1730</p>
          <h4>Projects</h4>
        </div>
        <div class="col-lg-3 col-6 stats_info counter_grid1">
          <p class="counter">780</p>
          <h4>Our Branches</h4>
        </div>
        <div class="col-lg-3 col-6 stats_info counter_grid mt-lg-0 mt-5">
          <p class="counter">512</p>
          <h4>Happy Customers</h4>
        </div>
        <div class="col-lg-3 col-6 stats_info counter_grid mt-lg-0 mt-5">
          <p class="counter">612</p>
          <h4>Awards</h4>
        </div>

      </div>
    </div>
  </section> -->
  <!-- //stats -->

  <!-- testimonials -->
  <section class="w3l-clients" id="clients"> 
    <!-- /grids -->
    <div class="cusrtomer-layout py-5">
      <div class="container py-lg-4 py-md-3 pb-lg-0">
        <div class="heading text-center mx-auto">
          <!-- <h6 class="sub-title text-center">What Our clients say</h6> -->
          <h3 class="hny-title mb-md-5 mb-4">Testimonials</h3>
        </div> 
            
        <!-- /grids -->
        <div class="testimonial-width mt-5">
          <div id="owl-demo1" class="owl-two owl-carousel owl-theme">
          <?php
              $query = "select * from testimonials";
              $result = mysqli_query($db,$query); 
              $num_rows = mysqli_num_rows($result);

              for($i=0; $i<$num_rows; $i++)
              {
                $rows = mysqli_fetch_array($result);
           ?>
           
            <div class="item">
              <div class="testimonial-content">
                <div class="testimonial">
                  <blockquote>
                    <span class="fa fa-quote-left" aria-hidden="true"></span>
                    <?php echo $rows['content'];?>
                  </blockquote>
                  <div class="testi-des">
                    <div class="test-img"><img src="acms/upload/<?php echo $rows['display_picture'];?>" class="img-fluid" alt="client-img">
                    </div>
                    <div class="peopl align-self">
                      <h3><?php echo $rows['title'];?></h3>
                      <!-- <p class="indentity">Example City</p> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <?php
                   }?>

          </div>
        </div>
      </div> 
      <!-- /grids -->
    </div> 
    <!-- //grids -->
  </section> <br>
  <!-- //testimonials -->
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
  <script src="assets/js/owl.carousel.js"></script>
  <!-- script for banner slider-->
  <script>
    $(document).ready(function () {
      $('.owl-one').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          480: {
            items: 1,
            nav: false
          },
          667: {
            items: 1,
            nav: true
          },
          1000: {
            items: 1,
            nav: true
          }
        }
      })
    })
  </script>
  <!-- //script -->
  <!-- script for tesimonials carousel slider -->
  <script>
    $(document).ready(function () {
      $("#owl-demo1").owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          736: {
            items: 2,
            nav: false
          },
          // 1000: {
          //   items: 3,
          //   nav: false,
          //   loop: true
          // }
        }
      })
    })
  </script>
  <!-- //script for tesimonials carousel slider -->

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