<?php

  include('acms/connection/connect.php');
?>
<!doctype html>
<html lang="zxx">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Contact | Cospharma Limited</title>
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
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4" style="background: url(assets/images/conb.jpg) no-repeat;">
      <div class="container py-2">
        <h2 class="title">Contact</h2>
        <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="index.php">Home</a></li>
          <!-- <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Contact </li> -->
        </ul>
      </div>
    </div>
  </section>
  <!-- //about breadcrumb -->
   <!--/contact-->
   <section class="w3l-contact-11 py-5">
    <div class="contacts-main py-lg-5 py-md-4">
      <div class="title-content text-center">
        <!-- <h6 class="sub-title">Contact</h6> -->
        <h3 class="hny-title">Get in touch</h3>
       
        
    </div>
      <div class="form-41-mian section-gap mt-5">
        <div class="container">
          <div class="d-grid align-form-map">
            <div class="form-inner-cont">
              <form action="proc-contact.php" method="post" class="signin-form">
              <?php if($msg)
          {
              echo '<div class="text-success"><i class="fa fa-check"></i> '.$msg.'</div>';
          }
          ?>
            
                <div class="form-input">
                  <label for="w3lName">Name</label>
                  <input type="text" name="name" id="Name" placeholder="" />
                </div>
                <div class="form-input">
                  <label for="w3lSender">Email(Required)*</label>
                  <input type="email" name="email" id="Sender" placeholder="" required="" />
                </div>
                <div class="form-input">
                  <label for="w3lMessage">Message(Required)*</label>
                  <textarea placeholder="" name="message" id="Message" required=""></textarea>
                </div>
                <div class="form-submit text-right">
                    <button type="submit" class="btn btn-style btn-secondary mt-4">Submit Message</button>
                  </div>
              </form>
            </div>
            
            <?php

            $query = "select * from contact_details";
            $result = mysqli_query($db,$query);
            $num_rows = mysqli_num_rows($result);

            for($i=0; $i<$num_rows; $i++)
            {
              $rows = mysqli_fetch_array($result);
            ?>
            
            <div class="caddress"  style="background-color: #faf7fe;">
            <h3 class="hny-title">Address:</h3> <br>
                <p><?php echo $rows['address'];?></p> <br>
            <h3 class="hny-title">Phone:</h3> <br>
            <p style="color: black;"><?php echo $rows['phone'];?>,  <?php echo $rows['phone_2'];?></p> <br>
            <h3 class="hny-title">Email:</h3> <br>
            <p><?php echo $rows['email'];?></p>
             
            </div>
            <?php } ?>
          </div>
          
        </div>
      </div>
  </section>
  <div class="map" style="width: 100%; height: 600px">
              <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31713.7812646769!2d3.1806553182275072!3d6.493467999371392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b84697f96fd7f%3A0x843bc7ac82cb5dca!2s10%20Emiscole%20St!5e0!3m2!1sen!2sng!4v1623927660359!5m2!1sen!2sng"
                frameborder="0" allowfullscreen=""></iframe>

            </div>
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