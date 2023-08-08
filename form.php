<!doctype html>
<html lang="zxx">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Order Form | Cospharma Limited</title>
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
  <style>
 .form-asterisk {
  font-family: initial;
  position: absolute;
  top: -2px;
  font-weight: normal;
}

.form-control-label {
  position: relative;
  cursor: pointer;
  margin-bottom: 0.357em;
  padding: 0;
}

.alert {
  color: #ffffff;
  border-radius: 0;
  border: 0;
  font-size: 1.1rem;
  line-height: 1.5;
  margin-bottom: 1.875rem;
  padding: 1.25rem;
  position: relative;
  text-align: center;
}
.alert.alert-form::after {
  background-color: inherit;
  bottom: -7px;
  content: "";
  display: block;
  height: 14px;
  left: 50%;
  margin-left: -7px;
  position: absolute;
  transform: rotate(45deg);
  width: 14px;
}

.form-control {
  background-color: #ffffff;
  background-clip: border-box;
  color: #232323;
  line-height: 1rem !important;
  height: auto;
  padding: 0.6rem 1.2rem;
  transition: border-color 0.25s ease 0s;
  border: 1px solid transparent !important;
  border-radius: 4px;
  box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 1px 0px, rgba(0, 0, 0, 0.07) 0px 1px 3px 0px, rgba(0, 0, 0, 0.03) 0px 0px 0px 1px;
}
.form-active .form-control:invalid {
  border-color: red;
}

form .row {
  margin-left: -0.6rem;
  margin-right: -0.6rem;
}
form .row [class*=col] {
  padding-left: 0.6rem;
  padding-right: 0.6rem;
}

form .mbr-section-btn {
  margin: 0;
  padding-left: 0.6rem;
  padding-right: 0.6rem;
}

form .btn {
  display: flex;
  padding: 0.6rem 1.2rem;
  margin: 0;
}

form .form-check-input {
  margin-top: 0.5;
}

textarea.form-control {
  line-height: 1.5rem !important;
}

.form-group {
  margin-bottom: 1.2rem;
}

.form-control,
form .btn {
  min-height: 48px;
}

.gdpr-block label span.textGDPR input[name=gdpr] {
  top: 7px;
}

.form-control:focus {
  box-shadow: none;
}
.btn {
  font-weight: 600;
  border-width: 1px;
  font-style: normal;
  margin: 0.6rem 0.6rem;
  white-space: normal;
  transition: all 0.2s ease-in-out;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  word-break: break-word;
}

.btn-sm {
  font-weight: 600;
  letter-spacing: 0px;
  transition: all 0.3s ease-in-out;
}

.btn-md {
  font-weight: 600;
  letter-spacing: 0px;
  transition: all 0.3s ease-in-out;
}

.btn-lg {
  font-weight: 600;
  letter-spacing: 0px;
  transition: all 0.3s ease-in-out;
}

.btn-form {
  margin: 0;
}
.btn-form:hover {
  cursor: pointer;
}

  </style>
  <body>
    <!--header-->
    <?php include ("menu.php") ; ?>
    <!-- //header -->
  <!-- about breadcrumb -->
  <section class="w3l-about-breadcrumb text-left">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4" style="background: url(assets/images/dgal.jpg) no-repeat;">
      <div class="container py-2">
        <h2 class="title">Order Form</h2>
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
    <div class="title-content text-center">
        <h3 class="hny-title">Order Form</h3>  
    </div> 
    <section class="form5 cid-sCBkwaNynz" id="form5-3y">
    <?php if($msg)
          {
              echo '<div class="text-success"><i class="fa fa-check"></i> '.$msg.'</div>';
          }
          ?>
    
    <div class="container">
       
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <form action="proc-order.php" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name"><input type="hidden" name="email" data-form-email="true" value="">
                    <!-- <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out
                            the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">Oops...! some
                            problem!</div>
                    </div>  -->
                     
                    <div class="dragArea row">
                        <div class="col-md col-sm-12 form-group" data-for="name">
                            <input type="text" name="name" placeholder="Name" data-form-field="name" class="form-control" value="" id="name-form5-3y">
                        </div>
                        <div class="col-md col-sm-12 form-group" data-for="email">
                            <input type="text" name="address" placeholder="Address" data-form-field="email" class="form-control" value="" id="email-form5-3y">
                        </div>
                        <div class="col-12 form-group" data-for="url">
                            <input type="phone" name="phone" placeholder="Phone" data-form-field="url" class="form-control" value="" id="url-form5-3y">
                        </div>
                        <div class="col-12 form-group" data-for="url">
                            <input type="email" name="email" placeholder="Email" data-form-field="url" class="form-control" value="" id="url-form5-3y">
                        </div>
                        <div class="col-12 form-group" data-for="textarea">
                            <textarea name="textarea" placeholder="Name of Product and Quantity" data-form-field="textarea" class="form-control" id="textarea-form5-3y"></textarea>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn"><button type="submit" class="btn btn-style btn-secondary mt-4">Order</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

         
</section> <br><br>
  
 
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