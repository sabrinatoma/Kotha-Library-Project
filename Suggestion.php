
<?php
@ob_start();
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Suggestions</title>
  
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
         echo' <li><a href="Homepage_std.php">Home</a></li>';
       }
      else  if($IDD[0]=='L')
       {
         echo' <li><a href="Homepage_lib.php">Home</a></li>';
       }
       ?>
         
          
        
          <li><a href="profilePage.php">Account</a></li>
          
       
          <li class="active"><a href="Suggestion.php">Suggestions</a></li>
       
          <li><a href="Report_at_Libr.php">Reports</a></li>
          

        </ul>
      </nav><!-- nav-menu -->

    </div>
  </header><!-- End Header -->


<!------------Stuednt List Table-------------->
<?php
$usr_name = 'DMBS1';
    $pass = '12345';

    $connectionString = 'localhost/xe';

    $connect = oci_connect($usr_name,$pass,$connectionString);

?>

<div class="container">
  <h2>Suggestions For Students:</h2>
    
  <div>
              <p>Search:</p>  
              <input class="form-control" id="myInput2" type="text" placeholder="Search..">
              <br>
              <?php
              echo '<table id="myytable" class="table table-hover">'
              ?>
              
    <?php echo '<thead>
      <tr>
        <th>Faculty Name</th>
        <th>Faculty ID</th>
        <th>Book Name</th>
        <th>Author Name</th>
        <th>For Level</th>
        <th>For Term</th>
        <th>Course ID</th>
        <th>Type</th>
      </tr>
    </thead>'?>

<?php
$show_table = 'select * from GIVESUGGESTION';
$out = oci_parse($connect,$show_table);
oci_execute($out);

while ($row = oci_fetch_array($out, OCI_RETURN_NULLS+OCI_ASSOC)) {
  echo '<tr>';
  foreach ($row as $item) {
      echo '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
             
  }
  
  echo '</tr>';
}

?>

<?php echo '</table>' ?>

</div></div>

<!------------------search------------>
<script>
    $(document).ready(function(){
      $("#myInput2").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myytable tr").filter(function() {
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
    <?php ob_flush();  ?>
  
</body>

</html>