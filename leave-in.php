<?php
  include('acms/connection/connect.php');

?>

<!doctype html>
<html lang="zxx">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Leave In Conditioner | Cospharma Limited</title>
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
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4" style="background: url(assets/images/pgal.jpg) no-repeat;">
      <div class="container py-2">
      <?php 

        $query = "select * from products where id = '6' ";
        $result = mysqli_query($db,$query);
        $num_rows = mysqli_num_rows($result);

        for($i=0; $i<$num_rows; $i++)
        {
          $rows = mysqli_fetch_array($result);
        ?>
        <h2 class="title"><?php echo $rows['product_name'];?></h2>
        <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="index.php">Home</a></li>
          <!-- <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Contact </li> -->
        </ul>
      </div>
    </div>
  </section>
  <!-- //about breadcrumb -->
   <!--/contact-->
    <section class="w3l-grids-3 py-5" id="about">
    <div class="container py-md-5">
        <div class="row">
                <div class="col-md-6">
                    <img src="acms/upload//upload/<?php echo $rows['image_1'];?>" class="img-fluid" alt="">
                </div>
            <div class="col-md-6">
            <img src="acms/upload//upload/<?php echo $rows['image_2'];?>" class="img-fluid" alt="">
            </div>
        </div>
    </div>
  </section>

  <section class="w3l-grids-3 py-5" id="about">
    <div class="container">
  <div class="row">
              <div class="col-md-4">
              <!-- <img src="assets/images/edge.jpg" class="img-fluid" alt=""> -->
            
              </div>
              <div class="col-md-4">
              <h3><?php echo $rows['product_name'];?></h3>
                <p class="my-3 pr-lg-4"><?php echo $rows['content'];?></p>
                                <?php }?>
                <a href="form.php" class="btn btn-style btn-secondary mt-4">Order this product</a>
            
              </div>
              <div class="col-md-4">
              <!-- <img src="assets/images/edge.jpg" class="img-fluid" alt=""> -->
            
              </div>
            
            </div>

            </div> <br>
  </section>
 
  <!--//contact-->
    <!--/w3l-footer-29-main-->

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