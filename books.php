<?php
@ob_start();
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Books</title>
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
    crossorigin="anonymous">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

  <link href="./CSSAll/booksCSS.css" rel="stylesheet">



<!-- ------------------------------------------------------ -->
<!-- ----------------Add Book Script---------------- -->
<!--
<script>
    $(document).ready(function () {
  
      // Denotes total number of rows
      var rowIdx = 0;
  
      // jQuery button click event to add a row
      $('#addBtn').on('click', function () {
  
        // Adding a row inside the tbody.
        $('#tbody').append(`<tr id="R${++rowIdx}">
             <td class="row-index text-center">
             <input type="Text" placeholder="BookName">
             </td>
             <td class="row-index text-center">
             <input type="Text" placeholder="AuthorName">
             </td>
             <td class="row-index text-center">
             <input type="Text" placeholder="For which Level">
             </td>
             <td class="row-index text-center">
             <input type="Text" placeholder="For which Term">
             </td>
             <td class="row-index text-center">
             <input type="Text" placeholder="Course ID">
             </td>
             <td class="row-index text-center">
             <label class="container">
                <input type="radio" checked="checked" name="radio">Text
                  <span class="checkmark"></span>
            </label>
            <label class="container">
                <input type="radio" name="radio">Reference
                <span class="checkmark"></span>
            </label>
             </td>
              <td class="text-center">
                <button class="btn btn-danger remove"
                  type="button">Remove</button>
                </td>
              </tr>`);
      
  
      
      });
    });
  </script>
-->


  <!-- ======================================================== -->
</head>


<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="#">Kotha</a></h1>
      <nav class="nav-menu d-none d-lg-block">
      <ul class="nav justify-content-end">
        <?php
     $IDD= $_SESSION['IID'];
     if($IDD[0]=='F')
     {
      echo'<li><a href="Homepage_fac.php">Home</a></li>';
     }
     else if($IDD[0]=='S')
     {
      echo'<li><a href="Homepage_std.php">Home</a></li>';
     }
     else
     {
     echo' <li><a href="Homepage_lib.php">Home</a></li>';
     }
        ?>
         
          
          <li class="drop-down active"><a href="books.php">Books</a>
            <ul>
              <li><a href="#">Text Books</a></li>
              
              <li><a href="">Magazine</a></li>
              <li><a href="">History Books</a></li>
              
            </ul>
          </li> 
          <li><a href="selectCart.php">Cart</a></li>
          <li><a href="profilePage.php">Account</a></li>
          <li><a href="Contact.php">Contact</a></li>
          
         
          

        </ul>
      </nav><!-- nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main" data-aos="fade-in">



<!-- ======= Booklist Section =======************************ -->

<section class="slider">
  <div class = "container-books" data-aos="fade-up">

    <h1 class = "lg-title">Find Your Books!</h1>

    <h4>Total Books: 240</h4>
    <div class="fetbook">

        

        <!-- Button to Open the Modal -->
<button type="button"  class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Add Book
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Informations of the Book:</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <form id="bform" action="/action_page.php" class="was-validated">
    <div class="form-group">
      <label for="bname">Book Name:</label>
      <input type="text" class="form-control" id="bname" placeholder="Enter Bookname" name="bname" required>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="aname">Author Name:</label>
      <input type="text" class="form-control" id="aname" placeholder="Enter Author Name" name="aname" required>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <label for="barcode">BarCode:</label>
      <input type="text" class="form-control" id="barcode" placeholder="Enter BarCode of the Book" name="barcode" required>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="avail">Available Number:</label>
      <input type="text" class="form-control" id="avail" placeholder="How many books are Available?" name="avail" required>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

  </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" id="subButton" class="btn btn-primary" data-dismiss="modal">Add this Book</button>
        </div>
        
        <script>
        $(document).ready(function(){
          $('#subButton').click(function(){
            $('#bform input[type="text"]').val('');
            });
          });
        </script>
        
        
      </div>
    </div>
  </div>
  
  <ul id="autoWidth" class="cs-hidden">
    <div class = "product-items">


  <!--1------------------------------------>	
  
<!--box-slider--------------->
  <div class="box">
  <!--img-box---------->
  <div class="slide-img">
  <img alt="1" src="./IMAGES/A programmer's Guide.jpg">
  <!--overlayer---------->
  <div class="overlay">
  <!--buy-btn------>	
  <a href="#" class="buy-btn" name="sel">Select</a>  	
  </div>
  </div>
  <!--detail-box--------->
  <div class="detail-box">
  <!--type-------->
  <div class="type">
  <?php
  echo'<h5>A programmers Guide</h5>';
  echo'<span> Dr. William M Springer</span>';
  echo'<h5>B-Yt346</h5>';
  echo'<div>';
    echo'<h6>Available: 6</h6>';
  echo'</div>';
  ?>
  </div>
    
  </div>
  
  </div>		

  <!--2------------------------------------>	
  
<!--box-slider--------------->
  <div class="box">
  <!--img-box---------->
  <div class="slide-img">
  <img alt="2" src="./IMAGES/Computer & Network Security.jpg">
  <!--overlayer---------->
  <div class="overlay">
  <!--buy-btn------>	
  <a href="#" class="buy-btn" name="sel">Select</a>	
  </div>
  </div>
  <!--detail-box--------->
  <div class="detail-box">
  <!--type-------->
  <div class="type">
    <h5>Computer & Network Security</h5>
  <span>Udo W. Pooch</span>
  <h5>B-90Pgfs</h5>
  <div>
    <h6>Available: 6</h6>
  </div>
  </div>
  
    
  </div>
  
  </div>		

  <!--3------------------------------------>	
  
<!--box-slider--------------->
  <div class="box">
  <!--img-box---------->
  <div class="slide-img">
  <img alt="3" src="./IMAGES/Data Structure Using C.jpg">
  <!--overlayer---------->
  <div class="overlay">
  <!--buy-btn------>	
  <a href="#" class="buy-btn" name="sel">Select</a>	
  </div>
  </div>
  <!--detail-box--------->
  <div class="detail-box">
  <!--type-------->
  <div class="type">
  <h5>Data Structure Using C</h5>
  <span>Anil k Ahlawat</span>
  <h5>B-12dft</h5>
  <div>
    <h6>Available: 6</h6>
  </div>
  </div>
  
  </div>
  
  </div>		

  <!--4------------------------------------>	
  
<!--box-slider--------------->
  <div class="box">
  <!--img-box---------->
  <div class="slide-img">
  <img alt="4" src="./IMAGES/Dictionary of Computer Science.png">
  <!--overlayer---------->
  <div class="overlay">
  <!--buy-btn------>	
  <a href="#" class="buy-btn" name="sel">Select</a>	
  </div>
  </div>
  <!--detail-box--------->
  <div class="detail-box">
  <!--type-------->
  <div class="type">
    <h5>Dictionary of Computer Science</h5>
  <span>Dr. S. Anandamurugan</span>
  <h5>B-VGF789</h5>
  <div>
    <h6>Available: 6</h6>
  </div>
  </div>
  
  </div>
  
  </div>		

  <!--5------------------------------------>	
  
<!--box-slider--------------->
  <div class="box">
  <!--img-box---------->
  <div class="slide-img">
  <img alt="5" src="./IMAGES/Funding A Revolution.jpg">
  <!--overlayer---------->
  <div class="overlay">
  <!--buy-btn------>	
  <a href="#" class="buy-btn" name="sel">Select</a>	
  </div>
  </div>
  <!--detail-box--------->
  <div class="detail-box">
  <!--type-------->
  <div class="type">
    <h5>Funding A Revolution</h5>
  <span> National Research Council</span>
  <h5>B-FR234E</h5>
  <div>
    <h6>Available: 6</h6>
  </div>
  </div>
  
  </div>
  
  </div>		

  <!--1------------------------------------>	
  
<!--box-slider--------------->
<div class="box">
  <!--img-box---------->
  <div class="slide-img">
  <img alt="1" src="./IMAGES/ARCH books/Architectural Engineer's Solutions Suite.jpg">
  <!--overlayer---------->
  <div class="overlay">
  <!--buy-btn------>	
  <a href="#" class="buy-btn" name="sel">Select</a>	
  </div>
  </div>
  <!--detail-box--------->
  <div class="detail-box">
  <!--type-------->
  <div class="type">
  <h5>Architectural Engineers Solutions Suite</h5>
  <span>Tyler Gregory Hicks</span>
  <h5>B-IJ65DS</h5>
  <div>
    <h6>Available: 6</h6>
  </div>
  </div>

  </div>
  
  </div>		

  <!--2------------------------------------>	
  
<!--box-slider--------------->
  <div class="box">
  <!--img-box---------->
  <div class="slide-img">
  <img alt="2" src="./IMAGES/ARCH books/Architectural Engineering Desing.jpg">
  <!--overlayer---------->
  <div class="overlay">
  <!--buy-btn------>	
  <a href="#" class="buy-btn" name="sel">Select</a>	
  </div>
  </div>
  <!--detail-box--------->
  <div class="detail-box">
  <!--type-------->
  <div class="type">
    <h5>Architectural Engineering Design</h5>
  <span> Robert Brown Butler </span>
  <h5>B-PKG4ds6</h5>
  <div>
    <h6>Available: 6</h6>
  </div>
  </div>
    
  </div>
  
  </div>		

  <!--3------------------------------------>	
  
<!--box-slider--------------->
  <div class="box">
  <!--img-box---------->
  <div class="slide-img">
  <img alt="3" src="./IMAGES/ARCH books/Engineering Design Graphics.jpg">
  <!--overlayer---------->
  <div class="overlay">
  <!--buy-btn------>	
  <a href="#" class="buy-btn" name="sel">Select</a>	
  </div>
  </div>
  <!--detail-box--------->
  <div class="detail-box">
  <!--type-------->
  <div class="type">
  <h5>Engineering Design Graphics</h5>
  <span>James H.Earle</span>
  <h5>B-984RTv3</h5>
  <div>
    <h6>Available: 6</h6>
  </div>
  </div>
  </div>
  
  </div>		

  <!--4------------------------------------>	
  
<!--box-slider--------------->
  <div class="box">
  <!--img-box---------->
  <div class="slide-img">
  <img alt="4" src="./IMAGES/ARCH books/Engineering Design Principles.jpg">
  <!--overlayer---------->
  <div class="overlay">
  <!--buy-btn------>	
  <a href="#" class="buy-btn" name="sel">Select</a>	
  </div>
  </div>
  <!--detail-box--------->
  <div class="detail-box">
  <!--type-------->
  <div class="type">
    <h5>Engineering Design Principles</h5>
  <span>Ken Hurst</span>
  <h5>B-9a8yn34</h5>
  <div>
    <h6>Available: 6</h6>
  </div>
  </div>
    
  </div>
  
  </div>		

  <!--5------------------------------------>	
  
<!--box-slider--------------->
  <div class="box">
  <!--img-box---------->
  <div class="slide-img">
  <img alt="5" src="./IMAGES/ARCH books/Engineering Design.jpg">
  <!--overlayer---------->
  <div class="overlay">
  <!--buy-btn------>	
  <a href="#" class="buy-btn" name="sel">Select</a>	
  </div>
  </div>
  <!--detail-box--------->
  <div class="detail-box">
  <!--type-------->
  <div class="type">
    <h5>Engineering Design</h5>
  <span>George E. Dieter <br>Linda C. Schmidt</span>
  <h5>B-PGB7334</h5>
  <div>
    <h6>Available: 6</h6>
  </div>
  </div>
  </div>
  
  </div>


    <!--4------------------------------------>	
  
<!--box-slider--------------->
<div class="box">
  <!--img-box---------->
  <div class="slide-img">
  <img alt="4" src="./IMAGES/ARCH books/Machine Design.jpg">
  <!--overlayer---------->
  <div class="overlay">
  <!--buy-btn------>	
  <a href="#" class="buy-btn" name="sel">Select</a>	
  </div>
  </div>
  <!--detail-box--------->
  <div class="detail-box">
  <!--type-------->
  <div class="type">
    <h5>Machine Design</h5>
  <span>R.S. Khurmi<br>J.K. Gupta</span>
  <h5>B-CE7y283</h5>
  <div>
    <h6>Available: 6</h6>
  </div>
  </div>
    
  </div>
  
  </div>



    <!--4------------------------------------>	
  
<!--box-slider--------------->
<div class="box">
  <!--img-box---------->
  <div class="slide-img">
  <img alt="4" src="./IMAGES/CE books/Civil Engineering Basics.jpg">
  <!--overlayer---------->
  <div class="overlay">
  <!--buy-btn------>	
  <a href="#" class="buy-btn" name="sel">Select</a>	
  </div>
  </div>
  <!--detail-box--------->
  <div class="detail-box">
  <!--type-------->
  <div class="type">
    <h5>Civil Engineering Basics</h5>
  <span>Er. Naveen Kumar</span>
  <h5>B-J7en927</h5>
  <div>
    <h6>Available: 6</h6>
  </div>
  </div>
    
  </div>
  
  </div>


    <!--4------------------------------------>	
  
<!--box-slider--------------->
<div class="box">
  <!--img-box---------->
  <div class="slide-img">
  <img alt="4" src="./IMAGES/CE books/Construction Practices for Land Development.jpg">
  <!--overlayer---------->
  <div class="overlay">
  <!--buy-btn------>	
  <a href="#" class="buy-btn" name="sel">Select</a>	
  </div>
  </div>
  <!--detail-box--------->
  <div class="detail-box">
  <!--type-------->
  <div class="type">
    <h5>Construction Practices for Land Development</h5>
    <span>Mc Graw Hill</span>
  <h5>B-K2h48dm</h5>
  <div>
    <h6>Available: 6</h6>
  </div>
  </div>
    
  </div>
  
  </div>


    


    <!--4------------------------------------>	
  
<!--box-slider--------------->
<div class="box">
  <!--img-box---------->
  <div class="slide-img">
  <img alt="4" src="./IMAGES/CE books/Soil Mechanics and Foundations.jpg">
  <!--overlayer---------->
  <div class="overlay">
  <!--buy-btn------>	
  <a href="#" class="buy-btn" name="sel">Select</a>	
  </div>
  </div>
  <!--detail-box--------->
  <div class="detail-box">
  <!--type-------->
  <div class="type">
    <h5>Soil Mechanics and Foundations</h5>
  <span>Dr. B. C. Punmia<br>Ashik Kumar Jain<br>Arun Kumar Jain</span>
  <h5>B-29g44ks</h5>
  <div>
    <h6>Available: 6</h6>
  </div>
  </div>
    
  </div>
  
  </div>


    <!--4------------------------------------>	
  
<!--box-slider--------------->
<div class="box">
  <!--img-box---------->
  <div class="slide-img">
  <img alt="4" src="./IMAGES/ME books/Automotive Mechanics.jpg">
  <!--overlayer---------->
  <div class="overlay">
  <!--buy-btn------>	
  <a href="#" class="buy-btn" name="sel">Select</a>	
  </div>
  </div>
  <!--detail-box--------->
  <div class="detail-box">
  <!--type-------->
  <div class="type">
    <h5>Automotive Mechanics</h5>
  <span>S Srinivasan</span>
  <h5>B-Vh402jn</h5>
  <div>
    <h6>Available: 6</h6>
  </div>
  </div>
    
  </div>
  
  </div>


    <!--4------------------------------------>	
  
<!--box-slider--------------->
<div class="box">
  <!--img-box---------->
  <div class="slide-img">
  <img alt="4" src="./IMAGES/ME books/Basic Mechanical Engineering.jpg">
  <!--overlayer---------->
  <div class="overlay">
  <!--buy-btn------>	
  <a href="#" class="buy-btn" name="sel">Select</a>	
  </div>
  </div>
  <!--detail-box--------->
  <div class="detail-box">
  <!--type-------->
  <div class="type">
    <h5>Basic Mechanical Engineering</h5>
  <span>Dr. Sadhu Singh</span>
  <h5>B-630s2j2</h5>
  <div>
    <h6>Available: 6</h6>
  </div>
  </div>
    
  </div>
  
  </div>

    <!--4------------------------------------>	
  
<!--box-slider--------------->
<div class="box">
  <!--img-box---------->
  <div class="slide-img">
  <img alt="4" src="./IMAGES/ME books/DEsign and Optimization of Thermal System.jpg">
  <!--overlayer---------->
  <div class="overlay">
  <!--buy-btn------>	
  <a href="#" class="buy-btn" name="sel">Select</a>	
  </div>
  </div>
  <!--detail-box--------->
  <div class="detail-box">
  <!--type-------->
  <div class="type">
    <h5>Design and Optimization of Thermal System</h5>
  <span>Yogesh Jaluria</span>
  <h5>B-90h3j1n</h5>
  <div>
    <h6>Available: 6</h6>
  </div>
  </div>
    
  </div>
  
  </div>

    <!--4------------------------------------>	
  
<!--box-slider--------------->
<div class="box">
  <!--img-box---------->
  <div class="slide-img">
  <img alt="4" src="./IMAGES/ME books/Dictionary of Mechanical Engineering.jpg">
  <!--overlayer---------->
  <div class="overlay">
  <!--buy-btn------>	
  <a href="#" class="buy-btn" name="sel">Select</a>	
  </div>
  </div>
  <!--detail-box--------->
  <div class="detail-box">
  <!--type-------->
  <div class="type">
    <h5>Dictionary of Mechanical Engineering</h5>
  <span>Tony Atkins<br>Marcel Escudier</span>
  <h5>B-3jna02n</h5>
  <div>
    <h6>Available: 6</h6>
  </div>
  </div>
    
  </div>
  
  </div>

   

    

    <!--4------------------------------------>	
  
<!--box-slider--------------->
<div class="box">
  <!--img-box---------->
  <div class="slide-img">
  <img alt="4" src="./IMAGES/PME books/Petroleum Engineering Explained.jpg">
  <!--overlayer---------->
  <div class="overlay">
  <!--buy-btn------>	
  <a href="#" class="buy-btn" name="sel">Select</a>	
  </div>
  </div>
  <!--detail-box--------->
  <div class="detail-box">
  <!--type-------->
  <div class="type">
    <h5>Petroleum Engineering Explained</h5>
  <span>David Shalicross</span>
  <h5>B-6bwk2m1</h5>
  <div>
    <h6>Available: 6</h6>
  </div>
  </div>
    
  </div>
  
  </div>
	
  


</div>
</ul>
</div>
</div>
  </section>

    <!-- End Books Section -->
  </main>
  <!-- End #main -->

  

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Contact</h3>
            <p>
              378 Sugar Camp Road,<br>
              Mirpur Cantonment,<br>
              Dhaka. <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> bookishcloud@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="profilePage.php">Account</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="">All the books</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="">Send us massage</a></li>
            </ul>
          </div>


          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Wanna get notification about new books?</h4>
            <p>Subscribe to out site..</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>


<?php
ob_flush();
?>

</body>
</html>