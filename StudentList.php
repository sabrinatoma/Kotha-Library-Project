<?php
@ob_start();
session_start();
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Student List</title>
  
  <!-- Favicons -->
  <link href="./assets/Images/page/books.png" rel="icon">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="CSSAll/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <link href="CSSAll/TablesListCSS.css" rel="stylesheet">

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
          echo'<li><a href="Homepage_std.php">Home</a></li>';
        }
        else if($IDD[0]=='L')
        {
          echo'<li><a href="Homepage_lib.php">Home</a></li>';
        }
        ?>
    
          
        <!--  <li class="drop-down"><a href="books.php">Books</a>
            <ul>
              <li><a href="#">Text Books</a>
              
              </li>
              <li><a href="">Magazine</a></li>
              <li><a href="">History Books</a></li>
              
            </ul>
          </li> -->
          <li><a href="profilePage.php">Account</a></li>
          
         <!-- <li class="active"><a href="StudentList.php">Students</a></li>
         
          <li><a href="Suggestion.php">Suggestions</a></li>-->
          
          <li><a href="Contact.php">Contact</a></li>
          <form class="form-inline my-2 my-lg-0" action = "StudentList.php" method = "post">
      <input class="form-control mr-sm-2" id="myInput" type="text" placeholder="Search.." aria-label="Search" name="searchdao">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="sear">Search</button>
    </form>

        </ul>
      </nav><!-- nav-menu -->

    </div>
  </header><!-- End Header -->


<!------------Stuednt List Table-------------->
<br><br><br><br>
<div class="container">

    

  <br>
  <?php
    $usr_name = 'DMBS1';
    $pass = '12345';

    $connectionString = 'localhost/xe';

    $connect = oci_connect($usr_name,$pass,$connectionString);

    if (!$connect){
        echo '<p>Could not Connect!</p>';
    }
    $show_table = "select ID \"ID\", DEPT \"Department\", NAME \"Name\", PHONE_NUM \"Phone No.\", EMAIL \"Email ID\" from PERSON_TABLE where id like 'S%'";
      $out = oci_parse($connect,$show_table);
      oci_execute($out);
      print "<table class = \"table table-responsive-md    table-striped table-dark table-hover id=\"myTable\"\">\n";
      print "<tr><td>ID</td><td>Department</td><td>Name</td><td>Phone No.</td><td>Email ID</td></tr>\n";

        while ($row = oci_fetch_array($out, OCI_ASSOC + OCI_RETURN_NULLS)) {
            print "<tr>\n";
            foreach ($row as $item) 
            {
                print "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
            }
            print "</tr>\n";
        }
        print "</table>\n";
  ?>

</div>

<script>
    $(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
    </script>





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

    <?php
    if (isset($_POST['sear'])){ 
      //$disi= $_POST['searchdao'];
      //if(!is_null($disi))
      
        $IDD= $_SESSION['IID'];
       
          echo'<script>';
          echo'function pageRedirect() {';
              echo'window.location.replace("BorrowHistory.php");';
          echo'}  ';    
          echo'setTimeout("pageRedirect()", 100);';
          echo'</script>';
       

      
    }
    ?>

    <?php ob_flush();  ?> 
</body>

</html>