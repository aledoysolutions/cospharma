<?php
  include('acms/connection/connect.php');

?>

<section class="w3l-footer7">
    <div class="footer7 py-5">
      <div class="container py-lg-3">
        <!-- <div class="footer-destinations mb-5 text-center">
          <h5>Designing Your Exterior
            Dreams Into Reality! </h5>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="#url">Blog</a></li>
            <li><a href="contact.php">Contact</a></li>

          </ul>
        </div> -->
        <div class="d-grid grid-col-3 footer-top7">
          <div class="footer-list7 mt-4">
            <h6 class="footer-title7">Quick links</h6>
            <ul>
            <li><a href="index.php">Home</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="gallery.php">Products</a></li>
              <!-- <li><a href="#url">Privacy & Policy</a></li> -->
              <li><a href="contact.php">Contact Us</a></li>
            </ul>
          </div>
          <div class="footer-list7 mt-4">

            <h6 class="footer-title7">Newsletter sign up</h6>
            <?php if($msg)
          {
              echo '<div class="text-success"><i class="fa fa-check"></i> '.$msg.'</div>';
          }
          ?>
            <form action="proc-news.php" method="post" class="footer-newsletter">
              <input type="email" name="email" placeholder="Email address" required />
              <button class="btn btn-style btn-secondary mt-4">subscribe</button>
            </form>

          </div>
          <?php
            $query = "select * from contact_details";
            $result = mysqli_query($db, $query);
            $num_rows = mysqli_num_rows($result);

            for($i=0; $i<$num_rows; $i++)
            {
              $rows = mysqli_fetch_array($result);


          ?>
          <div class="footer-list7 mt-4">
            <h6 class="footer-title7">Call Us:</h6>
            <ul class="phone-numbers">
              <li><a><?php echo $rows['phone'];?></a></li>
              <li><a><?php echo $rows['phone_2'];?></a></li>
            </ul>
            <?php }?>
            <h6 class="footer-title7">Connect with us</h6>
            <div class="main-social-footer7">
              <a href="#url" title="Facebook" class="footer-fb"><span class="fa fa-facebook"
                  aria-hidden="true"></span></a>
              <a href="#url" title="Twitter" class="footer-tw"><span class="fa fa-twitter"
                  aria-hidden="true"></span></a>
              <a href="#url" title="Youtube" class="footer-gg"><span class="fa fa-youtube"
                  aria-hidden="true"></span></a>
              <a href="#url" title="Linkedin" class="footer-lin"><span class="fa fa-linkedin"
                  aria-hidden="true"></span></a>
              <!-- <a href="#url" title="Pinterest" class="footer-pin"><span class="fa fa-pinterest"
                  aria-hidden="true"></span></a> -->
            </div>
          </div>
        </div>
        <div class="copy-right-hny text-center">
          <p>© 2021 Cospharma Limited. All Rights Reserved.
          </p>
        </div>
      </div>