<?php

@ob_start();
session_start();


require_once ("component1.php");

//$db = new CreateDb("Productdb", "Producttb");

if (isset($_POST['remove'])){
  if ($_GET['action'] == 'remove'){
      foreach ($_SESSION['cart'] as $key => $value){
          if($value["product_id"] == $_GET['id']){
              unset($_SESSION['cart'][$key]);
              echo "<script>alert('Product has been Removed...!')</script>";
              echo "<script>window.location = 'selectCart.php'</script>";
          }
      }
  }
}
if(isset($_POST['borrow'])){
  if ($_GET['action1'] == 'borrow'){
   echo $value["product_id"];
  }
  
}


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
<link href="style.css" rel="stylesheet">
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
  
  

<div class="container-fluid">
    <div class="row px-5">
        <div class="col-md-7">
            <div class="shopping-cart">
                <h6>My Cart</h6>
                <hr>

                <?php

                $total = 0;
                    if (isset($_SESSION['cart'])){
                        $product_id = array_column($_SESSION['cart'], 'product_id');

                        $usr_name = 'SYSTEM';
                        $pass = '123ORacle';
                        $connectionString = 'localhost/xe';
                        $connect = oci_connect($usr_name,$pass,$connectionString);

                        $show_table = 'select * from BookList';
                        $out = oci_parse($connect,$show_table);
                        oci_execute($out);
                        //while ($row = oci_fetch_assoc($result)){
                            while (($row = oci_fetch_array($out, OCI_NUM)) ) {
                            foreach ($product_id as $id){
                                if ($row[0] == $id){
                                  //function cartElement($productname,$productauthor,$productimg,$productbarcode,$productav){
                            
                                    cartElement($row[1],$row[2],$row[4],$row[0],$row[3]);   
                                    //cartElement($row['product_image'], $row['product_name'],$row['product_price'], $row['id']);
                                    
                                }
                            }
                        }
                    }else{
                        echo "<h5>Cart is Empty</h5>";
                    }

                ?>

            </div>
        </div>
      
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>





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