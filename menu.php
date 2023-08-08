<header id="logo" class="fixed-top">
      <div class="container">
        <nav class="navbar navbar-expand-lg stroke">
          <h1><a class="navbar-brand mr-lg-5" href="index.php">
          <a class="navbar-brand" href="index.php"><img src="assets/images/logoo1.png"/></a>
            </a></h1> 
          <!-- if logo is image enable this    -->
        <!-- <a class="navbar-brand" href="index.php">
            <img src="assets/images/logoo1.png"/>
        </a>  -->
          <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
            data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
            <span class="navbar-toggler-icon fa icon-close fa-times"></span>
            </span>
          </button>
  
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mx-lg-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About Us</a>
              </li>
              <li class="dropdown collapse navbar-collapse" id="navbarTogglerDemo02">
								<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Products <b class="caret"></b></a>
                  <ul class="dropdown-menu">

                  <?php 

$query = "select * from products";
$result = mysqli_query($db,$query);
$num_rows = mysqli_num_rows($result);

for($i=0; $i<$num_rows; $i++)
{
  $rows = mysqli_fetch_array($result);
?>
									  <li ><a href="products.php?unique=<?php echo base64_encode($rows['id']); ?>"><?php echo $rows['product_name']; ?></a></li> <br>
<?php 
}
?>

                    <!-- <li><a href="#">Relax Weav-on Oil</a></li> -->
								  </ul>
                </li>    
              <!-- <li class="nav-item">
                <a class="nav-link" href="order.php">Order Online</a>
              </li>             -->
              <li class="nav-item">
                <a class="nav-link" href="distributors.php">Distributors</a>
              </li>              
              <!-- <li class="nav-item">
                <a class="nav-link" href="events.php">Events</a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
              </div>
            </ul>
          </div>
        </nav>
      </div>
    </header>