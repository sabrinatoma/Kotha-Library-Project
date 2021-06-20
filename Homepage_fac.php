<?php
@ob_start();
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kotha</title>
  
  <!-- Favicons -->
  <link href="./assets/Images/page/books.png" rel="icon">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="CSSAll/bootstrap.min.css" rel="stylesheet">
  
  <!-- Template Main CSS File -->
  
  <link rel="stylesheet" href="CSSAll/lightslider.css">
  <!--Jquery-------------------->
  <script type="text/javascript" src="JSAll/JQuery.js"></script>
  <!--lightslider.js--------------->
  <script type="text/javascript" src="JSAll/lightslider.js"></script>

  <script src="JSAll/slider.js"></script>

  <link href="CSSAll/homeCSS.css" rel="stylesheet">

  <!--======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="#">Kotha</a></h1>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="Homepage_fac.php">Home</a></li>
          
          <li class="drop-down"><a href="books.php">Books</a>
            <ul>
              <li class="drop-down"><a href="#">Text Books</a>
              
              </li>
              <li><a href="">Magazine</a></li>
              <li><a href="">History Books</a></li>
              
            </ul>
          </li> 
          <li><a href="FacultyList.php">Faculties</a></li>
          <li><a href="profilePage.php">Account</a></li>
          <li><a href="Contact.php">Contact</a></li>
          <li><a href="GiveSugg.php">Recommended_books</a></li>
          <li><a href="selectCart.php">Cart</a></li>
          
          

        </ul>
      </nav><!-- nav-menu -->

    </div>
  </header><!-- End Header -->


  
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Welcome to</h1>
      <h2>Kotha Library!</h2>
<!--
      <span class="text1">Welcome to</span>
      <span class="text2">Kotha Library!</span> -->
 
    </div>
  </section><!-- End Hero -->


  <main id="main">

    <!-- ======= Features Books Section ======= -->
  <br>

    <section class="slider">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Featured Books</h2>
          <p>Find the Latest Books here</p>
        </div>

        <div class="fetbook">
      
      <ul id="autoWidth" class="cs-hidden">

      <!--1------------------------------------>	
      <li class="item-a">
    <!--box-slider--------------->
      <div class="box">
      <!--img-box---------->
      <div class="slide-img">
      <img alt="1" src="IMAGES/A programmer's Guide.jpg">
      <!--overlayer---------->
      <div class="overlay">
      <!--buy-btn------>	
      <a href="#" class="buy-btn">Select</a>	
      </div>
      </div>
      <!--detail-box--------->
      <div class="detail-box">
      <!--type-------->
      <div class="type">
      <h5>A programmer's Guide</h5>
      <span>Satyajit Ray</span>
      </div>
      </div>
      
      </div>		
    </li>
      <!--2------------------------------------>	
      <li class="item-b">
    <!--box-slider--------------->
      <div class="box">
      <!--img-box---------->
      <div class="slide-img">
      <img alt="2" src="IMAGES/Computer & Network Security.jpg">
      <!--overlayer---------->
      <div class="overlay">
      <!--buy-btn------>	
      <a href="#" class="buy-btn">Select</a>	
      </div>
      </div>
      <!--detail-box--------->
      <div class="detail-box">
      <!--type-------->
      <div class="type">
        <h5>Computer & Network Security</h5>
      <span>MD Zafor Ikbal</span>
      </div>

        
      </div>
      
      </div>		
    </li>
      <!--3------------------------------------>	
      <li class="item-c">
    <!--box-slider--------------->
      <div class="box">
      <!--img-box---------->
      <div class="slide-img">
      <img alt="3" src="IMAGES/Data Structure Using C.jpg">
      <!--overlayer---------->
      <div class="overlay">
      <!--buy-btn------>	
      <a href="#" class="buy-btn">Select</a>	
      </div>
      </div>
      <!--detail-box--------->
      <div class="detail-box">
      <!--type-------->
      <div class="type">
      <h5>Data Structure Using C</h5>
      <span>Kenneth Grahame</span>
      </div>
        
      </div>
      
      </div>		
    </li>
      <!--4------------------------------------>	
      <li class="item-d">
    <!--box-slider--------------->
      <div class="box">
      <!--img-box---------->
      <div class="slide-img">
      <img alt="4" src="IMAGES/Dictionary of Computer Science.png">
      <!--overlayer---------->
      <div class="overlay">
      <!--buy-btn------>	
      <a href="#" class="buy-btn">Select</a>	
      </div>
      </div>
      <!--detail-box--------->
      <div class="detail-box">
      <!--type-------->
      <div class="type">
        <h5>Dictionary of Computer Science</h5>
      <span>Anirban Basu</span>
      </div>
        
      </div>
      
      </div>		
    </li>
      <!--5------------------------------------>	
      <li class="item-e">
    <!--box-slider--------------->
      <div class="box">
      <!--img-box---------->
      <div class="slide-img">
      <img alt="5" src="IMAGES/Funding A Revolution.jpg">
      <!--overlayer---------->
      <div class="overlay">
      <!--buy-btn------>	
      <a href="#" class="buy-btn">Select</a>	
      </div>
      </div>
      <!--detail-box--------->
      <div class="detail-box">
      <!--type-------->
      <div class="type">
        <h5>Funding A Revolution</h5>
      <span>Angelina Hudson</span>
      </div>
      <!--price-------->
      </div>
      
      </div>		
    </li>
      

      <!-- End  Features Books Section -->
    


  </main><!-- End #main -->


  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Contact</h3>
            <p>
              MK University<br>
              Mirpur Cantonment,<br>
              Dhaka. <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> kothalibrary@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="">Home</a></li>
              
              <li><i class="bx bx-chevron-right"></i> <a href="">All the books</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="">Send us massage</a></li>
            </ul>
          </div>


          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Wanna get notification about new books?</h4>
            <p>Stay Conected..</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Click Here!">
            </form>
          </div>

        </div>
      </div>
    </div>

  
    <?php ob_flush();  ?>

</body>

</html>