<?php
@ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Seleted Books</title>
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="CSSAll/bootstrap.min.css" rel="stylesheet">
  

  <link href="CSSAll/selectCartCSS.css" rel="stylesheet">

  <link href="CSSAll/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="JSAll/bootstrap.min.js"></script>
<script src="JSAll/jquery-1.11.1.min.js"></script>



  <!--======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center">
  
        <h1 class="logo mr-auto"><a href="#">Kotha</a></h1>
        <nav class="nav-menu d-none d-lg-block">
          <ul>
      <?php
          $IDD= $_SESSION['IID'];
       if($IDD[0]=='S')
       {
         echo '<li><a href="Homepage_std.php">Home</a></li>';
       }
       else if($IDD[0]=='F')
       {
         echo '<li><a href="Homepage_fac.php">Home</a></li>';
       }
       

       ?>
            
            
            <li class="drop-down"><a href="books.php">Books</a>
              <ul>
                <li class="drop-down"><a href="#">Text Books</a>
                  <ul>
                    <li><a href="">CE</a></li>
                    <li><a href="">CSE</a></li>
                    <li><a href="">ME</a></li>
                    <li><a href="">EECE</a></li>
                    <li><a href="">NSE</a></li>
                    <li><a href="">PME</a></li>
                    <li><a href="">ARCH</a></li>
                  
                  </ul>
                </li>
                <li><a href="">Magazine</a></li>
                <li><a href="">History Books</a></li>
                
              </ul>
            </li> 
            <li><a href="profilePage.php">Account</a></li>
            <li><a href="Contact.php">Contact</a></li>
            <li class="active"><a href="selectCart.php">Cart</a></li>
            
            
  
          </ul>
        </nav><!-- nav-menu -->
  
      </div>
    </header><!-- End Header -->
  


<div class="Ccontainer">
    <h5>Find your selected books here</h5><br><br>
	<table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:50%">Books</th>

              <th style="width:15%;">Barcode</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
					<tbody>
            <!-------------->
						<tr>
							<td data-th="Product">
								<div class="row">
									<div class="col-sm-2 hidden-xs"><img src="./IMAGES/Computer & Network Security.jpg"/></div>
									<div class="col-sm-10">
										<h4 class="nomargin">Computer & Network Security</h4>
                                        <span>Author</span>
										</div>
								</div>
							</td>
						

              <td data-th="Barcode">
								<p>301140000238</p>
							</td>
							
							<td class="actions" data-th="">
								<button class="btn btn-danger btn-sm"><i class="fa fa-minus-circle" aria-hidden="true">Remove</i></button>								
							</td>
						</tr>
              
            <!-------------->
              <tr>
							<td data-th="Product">
								<div class="row">
									<div class="col-sm-2 hidden-xs"><img src="./IMAGES/A programmer's Guide.jpg"/></div>
									<div class="col-sm-10">
										<h4 class="nomargin">A programmer's Guide</h4>
                                        <span>Author</span>
										</div>
								</div>
							</td>
							
							

              <td data-th="Barcode">
								<p>301140000238</p>
							</td>
							
							<td class="actions" data-th="">
								<button class="btn btn-danger btn-sm"><i class="fa fa-minus-circle" aria-hidden="true">Remove</i></button>								
							</td>
						</tr>

            <!-------------->
						<tr>
							<td data-th="Product">
								<div class="row">
									<div class="col-sm-2 hidden-xs"><img src="./IMAGES/ARCH books/Architectural Engineering Desing.jpg"/></div>
									<div class="col-sm-10">
										<h4 class="nomargin">Architectural Engineering Desing</h4>
                                        <span>Author</span>
										</div>
								</div>
							</td>
							
							

              <td data-th="Barcode">
								<p>301140000238</p>
							</td>
							
							<td class="actions" data-th="">
								<button class="btn btn-danger btn-sm"><i class="fa fa-minus-circle" aria-hidden="true">Remove</i></button>								
							</td>
						</tr>
              
            <!-------------->
              <tr>
							<td data-th="Product">
								<div class="row">
									<div class="col-sm-2 hidden-xs"><img src="./IMAGES/CE books/Construction Practices for Land Development.jpg"/></div>
									<div class="col-sm-10">
										<h4 class="nomargin">Construction Practices for Land Development</h4>
                                        <span>Author</span>
										</div>
								</div>
							</td>
							
							

              <td data-th="Barcode">
								<p>301140000238</p>
							</td>
							
							<td class="actions" data-th="">
								<button class="btn btn-danger btn-sm"><i class="fa fa-minus-circle" aria-hidden="true">Remove</i></button>								
							</td>
						</tr>



					</tbody>
					<tfoot>
						<tr class="visible-xs">
							
						</tr>
						<tr>
							<td><a href="books.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Selecting Books</a></td>
							<td colspan="2" class="hidden-xs"></td>
							
							<td><a href="#" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
						</tr>
					</tfoot>
				</table>
</div>

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
              <li><i class="bx bx-chevron-right"></i> <a href="profilePage.html">Account</a></li>
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
    <?php ob_flush();  ?>
  
</body>

</html>