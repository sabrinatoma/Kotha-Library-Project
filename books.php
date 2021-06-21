<?php
@ob_start();
session_start();
?>

<?php
require_once('component1.php');

if(isset($_POST['add'])){
    //echo ($_POST['product_id']);
    if(isset($_SESSION['cart'])){
        
        $item_array_id=array_column($_SESSION['cart'],"product_id");
        print_r($item_array_id);
       // print_r($_SESSION['cart']);
       if(in_array($_POST['product_id'], $item_array_id)){
        echo "<script>alert('Product is already added in the cart..!')</script>";
        echo "<script>window.location = 'books.php'</script>";
    
    }
       else{
        $count = count($_SESSION['cart']); 
        $item_array=array(
            'product_id'=>$_POST['product_id']
        );
        $_SESSION['cart'][$count] = $item_array;
        print_r($_SESSION['cart']);
       }
    
    }
    else{
        $item_array=array(
            'product_id'=>$_POST['product_id']
        );
        $_SESSION['cart'][0]=$item_array;
        //print_r($_SESSION['cart']);
    }
}

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
  <link rel="stylesheet" href="./CSSALL/style.css">
  <link href="./CSSAll/booksCSS.css" rel="stylesheet">



<!-- ------------------------------------------------------ -->
<!-- ----------------Add Book Script---------------- -->


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
  
  


</div>
</div>

<div class="container">
    <div class="row text-cenetr py-5">
            <?php
       
            $usr_name = 'DMBS1';
            $pass = '12345';
        
            $connectionString = 'localhost/xe';
        
            $connect = oci_connect($usr_name,$pass,$connectionString);
          
            $show_table = 'select * from BookList';
            $out = oci_parse($connect,$show_table);
            oci_execute($out);
            
            //component1("Product4","$990","./upload/product4.png");
            while (($row = oci_fetch_array($out, OCI_NUM)) ) {
            
              component1($row[1],$row[2],$row[4],$row[0],$row[3]);                      
            //component1($row['product_name'], $row['product_price'], $row['product_image']);
            }

            
            ?>
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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  

<?php
ob_flush();
?>

</body>
</html>