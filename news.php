<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <!-- Title -->
  <title>Fruitful well | Blog</title>
  <!-- Favicon -->
  <link rel="icon" href="img/core-img/favicon.ico">
  <!-- Core Stylesheet -->
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <!-- Preloader -->
  <div class="preloader d-flex align-items-center justify-content-center">
    <div class="spinner"></div>
  </div>

  <!-- ##### Header Area Start ##### -->
  <header class="header-area">
    <!-- Top Header Area -->
    <div class="top-header-area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="top-header-content d-flex align-items-center justify-content-between">
              <!-- Top Header Content -->
              <div class="top-header-meta">
                <p>Welcome and learn how <span>God</span>, is transforming people lives.</p>
              </div>
              <!-- Top Header Content -->
              <div class="top-header-meta text-right">
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="info@fruitfulwell.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>Email: info@fruitfulwell.com</span></a>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="+265 997 720 050"><i class="fa fa-phone" aria-hidden="true"></i> <span>Call Us: +265 997 720 050</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Navbar Area -->
    <div class="famie-main-menu">
      <div class="classy-nav-container breakpoint-off">
        <div class="container">
          <!-- Menu -->
          <nav class="classy-navbar justify-content-between" id="famieNav">
            <!-- Nav Brand -->
            <a href="index.html" class="nav-brand"><img src="img/core-img/fruitful-well.png" alt=""></a>
            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
              <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>
            <!-- Menu -->
            <div class="classy-menu">
              <!-- Close Button -->
              <div class="classycloseIcon">
                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
              </div>
              <!-- Navbar Start -->
              <div class="classynav">
                <ul>
                  <li class="active"><a href="index.html">Home</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="parteners.html">Partners</a></li>
                  <li><a href="shop.html">Our Product</a></li>
                  <li><a href="news.html">News</a></li>
                  <li><a href="contact.html">Contact</a></li>
                </ul>
                <!-- Search Icon -->
                <div id="searchIcon">
                  <i class="icon_search" aria-hidden="true"></i>
                </div>
                <!-- Cart Icon -->
                <div id="cartIcon">
                  <a href="#">
                    <i class="icon_cart_alt" aria-hidden="true"></i>
                    <span class="cart-quantity">0</span>
                  </a>
                </div>
              </div>
              <!-- Navbar End -->
            </div>
          </nav>

          <!-- Search Form -->
          <div class="search-form">
            <form action="#" method="get">
              <input type="search" name="search" id="search" placeholder="Type keywords &amp; press enter...">
              <button type="submit" class="d-none"></button>
            </form>
            <!-- Close Icon -->
            <div class="closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- ##### Header Area End ##### -->


  <!-- ##### Breadcrumb Area Start ##### -->
  <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url('img/bg-img/1c.jpg');">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <div class="breadcrumb-text">
            <h2>News</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="famie-breadcrumb">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">News</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- ##### Breadcrumb Area End ##### -->

  <!-- ##### Blog Area Start ##### -->
  <section class="famie-blog-area">
    <div class="container">
      <div class="row">
        <!-- Posts Area -->
        <div class="col-12 col-md-8">
          <div class="posts-area">


            

            <!-- Single Blog Post Area -->
            <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fruitful_well";

// CREATE CONNECTION
$conn = new mysqli($servername,
  $username, $password, $dbname);

// GET CONNECTION ERRORS
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL QUERY
$query = "SELECT * FROM `blog`;";

// FETCHING DATA FROM DATABASE
$result = $conn->query($query);

  if ($result->num_rows > 0) 
  {
      // OUTPUT DATA OF EACH ROW
      while($row = $result->fetch_assoc())
      {
  ?>

  <?php
while ($row = mysqli_fetch_array($result)) {
   echo '<img src="data:image/jpeg;base64,'.base64_encode($row['cover_image']).'"/>';
}




            $rdate =  strtotime ($row["date_post"]);
            $fdate = date("j F Y", $rdate);
          echo " " .
              
              
              
              
              
               
              "<br>";
  

?>





            <div class="single-blog-post-area mb-50 wow fadeInUp" data-wow-delay="100ms">
              <h6>Post on <a href="#" class="post-date"><?php echo $fdate; ?></a> / <a href="#" class="post-author"><?php echo $row["article_author"]; ?></a></h6>
              <a href="<?php echo $row["id_article"]; ?>" class="post-title"><?php echo $row["article_title"]; ?></a>
            <?php  echo '<img src="data:image/jpeg;base64,'.base64_encode($row['cover_image']).'"/>';?>
              <p class="post-excerpt">
                <?php echo $row["article_content"]; ?>
              </p>
            </div>

            <?php 
                }
              } 
              else {
                  echo "0 results";
              }
 $conn->close();

?>
            <!-- Single Blog Post Area -->
            <div class="single-blog-post-area mb-50 wow fadeInUp" data-wow-delay="300ms">
              <h6>Post on <a href="#" class="post-date">12 Sept 2020</a> / <a href="#" class="post-author">Moise chirusha</a></h6>
              <a href="#" class="post-title">Children dying of hunger, while having empty lands</a>
              <img src="img/bg-img/post1.jpg" alt="" class="post-thumb">
              <p class="post-excerpt">
                The cause of children dying of hunger is not lack of cultivable land but lack of the right equipment and farming techniques...
              </p>
            </div>

            <!-- Single Blog Post Area -->
            <div class="single-blog-post-area mb-50 wow fadeInUp" data-wow-delay="500ms">
              <h6>Post on <a href="#" class="post-date">24 Aug 2020</a> / <a href="#" class="post-author">Shadreck</a></h6>
              <a href="#" class="post-title">Mercy story - Water is life</a>
              <img src="img/bg-img/mercy.png" alt="" class="post-thumb">
              <p class="post-excerpt">
                We have been privileged to get clean water as in former time we couldn't have access to them. Now washing, cleaning dishes, has...
              </p>
            </div>

            <!-- Single Blog Post Area -->
            <div class="single-blog-post-area mb-50 wow fadeInUp" data-wow-delay="700ms">
              <h6>Post on <a href="#" class="post-date">18 Aug 2018</a> / <a href="#" class="post-author">Bishop Safari</a></h6>
              <a href="#" class="post-title">The way God uses agriculture to holistic ministry</a>
              <img src="img/bg-img/1d.jpg" alt="" class="post-thumb">
              <p class="post-excerpt">
                Our holistic ministry is been used by God to change people lives as sustainable projects are being implemented into...
              </p>
            </div>

          </div>

          <!-- pagination -->
          <nav>
            <ul class="pagination wow fadeInUp" data-wow-delay="900ms">
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul>
          </nav>
        </div>

        <!-- Sidebar Area -->
        <div class="col-12 col-md-4">
          <div class="sidebar-area">

            <!-- Single Widget Area -->
            <div class="single-widget-area">
              <form action="#" method="post" class="search-widget-form">
                <input type="search" class="form-control" placeholder="Search">
                <button type="submit"><i class="icon_search" aria-hidden="true"></i></button>
              </form>
            </div>

            <!-- Single Widget Area -->
            <div class="single-widget-area">
              <!-- Title -->
              <h5 class="widget-title">Catagories</h5>
              <!-- Cata List -->
              <ul class="cata-list">
                <li><a href="#">Recipe Collections</a></li>
                <li><a href="#">The advantage of knowledge</a></li>
                <li><a href="#">Organic Farming</a></li>
                <li><a href="#">Farming &amp; Agricultural</a></li>
                <li><a href="#">Special Diet</a></li>
                <li><a href="#">How to Manage Soil Fertility</a></li>
              </ul>
            </div>

            <!-- Single Widget Area -->
            <div class="single-widget-area">
              <!-- Title -->
              <h5 class="widget-title">Recent News</h5>

              <!-- Single Recent News Start -->
              <div class="single-recent-blog style-2 d-flex align-items-center">
                <div class="post-thumbnail">
                  <img src="img/bg-img/1b.jpg" alt="">
                </div>
                <div class="post-content">
                  <a href="#" class="post-title">Drip irrigation system</a>
                  <div class="post-date">20 Aug 2020</div>
                </div>
              </div>

              <!-- Single Recent News Start -->
              <div class="single-recent-blog style-2 d-flex align-items-center">
                <div class="post-thumbnail">
                  <img src="img/bg-img/1e.jpg" alt="">
                </div>
                <div class="post-content">
                  <a href="#" class="post-title">Our Malawian team</a>
                  <div class="post-date">21 Sept 2020</div>
                </div>
              </div>

              <!-- Single Recent News Start -->
              <div class="single-recent-blog style-2 d-flex align-items-center">
                <div class="post-thumbnail">
                  <img src="img/bg-img/thengo.JPG" alt="">
                </div>
                <div class="post-content">
                  <a href="#" class="post-title">Production of plenty vegetables</a>
                  <div class="post-date">10 Oct 2020</div>
                </div>
              </div>

              <!-- Single Recent News Start -->
              <div class="single-recent-blog style-2 d-flex align-items-center">
                <div class="post-thumbnail">
                  <img src="img/bg-img/9.jpg" alt="">
                </div>
                <div class="post-content">
                  <a href="#" class="post-title">Poultry for the production of eggs and manure</a>
                  <div class="post-date">18 Aug 2018</div>
                </div>
              </div>
            </div>

            <!-- Single Widget Area -->
            <div class="single-widget-area">
              <!-- Title -->
              <h5 class="widget-title">Tags</h5>
              <!-- Tags -->
              <ul class="famie-tags">
                <li><a href="#">All product</a></li>
                <li><a href="#">Freshy Fruit</a></li>
                <li><a href="#">Sweet Corn</a></li>
                <li><a href="#">Chicken</a></li>
                <li><a href="#">Organic</a></li>
                <li><a href="#">Farm Practices</a></li>
                <li><a href="#">Meat</a></li>
                <li><a href="#">Special Recipe</a></li>
              </ul>
            </div>

            <!-- Single Widget Area -->
            <div class="single-widget-area">
              <!-- Title -->
              <h5 class="widget-title">Best products</h5>

              <!-- Single Best Products -->
              <div class="single-best-product d-flex align-items-center">
                <!-- Product Thumbnail -->
                <div class="product-thumbnail">
                  <a href="#"><img src="img/bg-img/34.jpg" alt=""></a>
                </div>
                <!-- Product Info -->
                <div class="product-info">
                  <a href="#" class="pro-name">Strawberry</a>
                  <h6>MK 500</h6>
                  <div class="product-rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                  </div>
                </div>
              </div>

              <!-- Single Best Products -->
              <div class="single-best-product d-flex align-items-center">
                <!-- Product Thumbnail -->
                <div class="product-thumbnail">
                  <a href="#"><img src="img/bg-img/p10.jpg" alt=""></a>
                </div>
                <!-- Product Info -->
                <div class="product-info">
                  <a href="#" class="pro-name">Carotte</a>
                  <h6>MK 130</h6>
                  <div class="product-rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                  </div>
                </div>
              </div>

              <!-- Single Best Products -->
              <div class="single-best-product d-flex align-items-center">
                <!-- Product Thumbnail -->
                <div class="product-thumbnail">
                  <a href="#"><img src="img/bg-img/36.jpg" alt=""></a>
                </div>
                <!-- Product Info -->
                <div class="product-info">
                  <a href="#" class="pro-name">Avocado</a>
                  <h6>MK 430</h6>
                  <div class="product-rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ##### Blog Area End ##### -->
<!-- ##### Footer Area Start ##### -->
  <footer class="footer-area">
    <!-- Main Footer Area -->
    <div class="main-footer bg-img bg-overlay section-padding-80-0" style="background-image: url(img/bg-img/3.jpg);">
      <div class="container">
        <div class="row">

          <!-- Single Footer Widget Area -->
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="footer-widget mb-80">
              <a href="#" class="foo-logo d-block mb-30"><img src="img/core-img/fruitful-well.png" alt=""></a>
              <p>We are a christian based organization with a mission of improving farming techniques in developing countries to reduce hunger and malnutrition, creating source of income to farmers and providing clean water.</p>
              <div class="contact-info">
                <p><i class="fa fa-map-pin" aria-hidden="true"></i><span>Lilongwe, Malawi</span></p>
                <p><i class="fa fa-envelope" aria-hidden="true"></i><span>info@fruitfulwell.com</span></p>
                <p><i class="fa fa-phone" aria-hidden="true"></i><span>+265 997 720 050</span></p>
              </div>
            </div>
          </div>

          <!-- Single Footer Widget Area -->
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="footer-widget mb-80">
              <h5 class="widget-title">QUICK LINK</h5>
              <!-- Footer Widget Nav -->
              <nav class="footer-widget-nav">
                <ul>
                  <li><a href="#">About us</a></li>
                  <li><a href="./parteners.html#donation-form">Donate</a></li>
                  <li><a href="./shop.html">Order</a></li>
                  <li><a href="#">Payments</a></li>
                  <li><a href="./parteners.html">Partners</a></li>
                </ul>
              </nav>
            </div>
          </div>

          <!-- Single Footer Widget Area -->
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="footer-widget mb-80">
              <h5 class="widget-title">RECENT NEWS</h5>

              <!-- Single Recent News Start -->
              <div class="single-recent-blog d-flex align-items-center">
                <div class="post-thumbnail">
                  <img src="img/bg-img/1b.jpg" alt="">
                </div>
                <div class="post-content">
                  <a href="#" class="post-title">Drip irrigation system</a>
                  <div class="post-date">20 Aug 2020</div>
                </div>
              </div>

              <!-- Single Recent News Start -->
              <div class="single-recent-blog d-flex align-items-center">
                <div class="post-thumbnail">
                  <img src="img/bg-img/1c.jpg" alt="">
                </div>
                <div class="post-content">
                  <a href="#" class="post-title">Training people of use of drip system</a>
                  <div class="post-date">01 Jul 2020</div>
                </div>
              </div>

            </div>
          </div>

          <!-- Single Footer Widget Area -->
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="footer-widget mb-80">
              <h5 class="widget-title">STAY CONNECTED</h5>
              <!-- Footer Social Info -->
              <div class="footer-social-info">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                  <span>Facebook</span>
                </a>
                <a href="#">
                  <i class="fa fa-youtube" aria-hidden="true"></i>
                  <span>Youtube</span>
                </a>
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                  <span>Instagram</span>
                </a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- Copywrite Area  -->
    <div class="copywrite-area">
      <div class="container">
        <div class="copywrite-text">
          <div class="row align-items-center">
            <div class="col-md-6">
              <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Proudly developed by <a href="http://ufanuzi.com" target="_blank">Ufanuzi</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
            </div>
            <div class="col-md-6">
              <div class="footer-nav">
                <nav>
                  <ul>
                    <li><a href="#">About us</a></li>
                    <li><a href="./parteners.html#donation-form">Donate</a></li>
                    <li><a href="./shop.html">Order</a></li>
                    <li><a href="#">Payments</a></li>
                    <li><a href="./parteners.html">Partners</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- ##### Footer Area End ##### -->

  <!-- ##### All Javascript Files ##### -->
  <!-- jquery 2.2.4  -->
  <script src="js/jquery.min.js"></script>
  <!-- Popper js -->
  <script src="js/popper.min.js"></script>
  <!-- Bootstrap js -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Owl Carousel js -->
  <script src="js/owl.carousel.min.js"></script>
  <!-- Classynav -->
  <script src="js/classynav.js"></script>
  <!-- Wow js -->
  <script src="js/wow.min.js"></script>
  <!-- Sticky js -->
  <script src="js/jquery.sticky.js"></script>
  <!-- Magnific Popup js -->
  <script src="js/jquery.magnific-popup.min.js"></script>
  <!-- Scrollup js -->
  <script src="js/jquery.scrollup.min.js"></script>
  <!-- Jarallax js -->
  <script src="js/jarallax.min.js"></script>
  <!-- Jarallax Video js -->
  <script src="js/jarallax-video.min.js"></script>
  <!-- Active js -->
  <script src="js/active.js"></script>
</body>

</html>