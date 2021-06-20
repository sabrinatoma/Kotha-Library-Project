<?php
@ob_start();
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Recommand Books</title>
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="CSSAll/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
    crossorigin="anonymous">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <link href="CSSAll/ContactCSS.css" rel="stylesheet">

  

  <!--======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="#">Kotha</a></h1>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="Homepage_fac.php">Home</a></li>
          
         <!-- <li class="drop-down"><a href="books.php">Books</a>
            <ul>
              <li><a href="#">Text Books</a>
              
              </li>
              <li><a href="">Magazine</a></li>
              <li><a href="">History Books</a></li>
              
            </ul>
          </li> -->
          <li><a href="profilePage.php">Account</a></li>
          <li class="active"><a href="GiveSugg.php">Recommand Books</a></li>
          <li><a href="Contact.php">Contact</a></li>
          
          

        </ul>
      </nav><!-- nav-menu -->

    </div>
  </header><!-- End Header -->


<!------------Stuednt List Table-------------->
<div class="container">
  <h2>Recommend Books For Students.</h2><br><br>


                <form action="GiveSugg.php" method="POST">
                <div class="form-row">
                        <div class="col">
                            <input type="text" name="fcname" class="form-control" id="fcname" placeholder="Faculty Name">
                        </div>
                        <div class="col">
                            <input type="text" name="fcid" class="form-control" id="fcid" placeholder="Faculty ID">
                        </div>
                        <br><br>
                      </div>
                    <div class="form-row">
                        <div class="col">
                            <input type="text" name="bkname" class="form-control" id="bkname" placeholder="Book Name">
                        </div>
                        <div class="col">
                            <input type="text" name="Aname" class="form-control" id="Aname" placeholder="Author Name">
                        </div>
                        <br><br>
                      </div>
                      <div class="form-row">
                        <div class="col">
                            <input type="text" name="flvl" class="form-control" id="flvl" placeholder="For Level">
                        </div>
                        <div class="col">
                            <input type="text" name="ftrm" class="form-control" id="ftrm" placeholder="For Term">
                        </div>
                        <div class="col">
                            <input type="text" name="crsID" class="form-control" id="crsID" placeholder="Course ID">
                        </div>
                      </div>
                      <br>                        
                        <div>
                        <label class="container">
                            <input type="radio" checked="checked" name="radio" value="TextBook">Text
                            <span class="checkmark"></span>
                        </label>
                        <label class="container">
                            <input type="radio" name="radio" value="ReferenceBook">Reference
                            <span class="checkmark"></span>
                        </label>
                        </div>
                        <br>
                    
                    <br><button type="submit" name="SubSugg" class="btn btn-primary">Submit</button>
                    <br><br>
                </form>
                

<?php
//Give Suggestion form
$usr_name = 'DMBS1';
    $pass = '12345';

    $connectionString = 'localhost/xe';

    $connect = oci_connect($usr_name,$pass,$connectionString);
    
    if(isset($_POST['SubSugg']))
    { 
      $fcname = $_POST['fcname'];
      $fcid = $_POST['fcid'];
      $bkname = $_POST['bkname'];
      $Aname = $_POST['Aname'];
      $flvl = $_POST['flvl'];
      $ftrm = $_POST['ftrm'];
      $crsID = $_POST['crsID'];
      $radio = $_POST['radio'];
      
      $command = 'insert into GIVESUGGESTION';
      $datas = ' values ('. "'".$fcname."'". ",". "'".$fcid."'". "," . "'".$bkname."'". "," . "'".$Aname."'". ",". "'".$flvl."'". ",". "'".$ftrm."'". ",". "'".$crsID."'". ",". "'".$radio."'".')';
      //echo $datas;
      $command.=$datas;
      $out = oci_parse($connect,$command);
      $res = oci_execute($out);

      error_reporting(0);

      $i=0;
      while($row=oci_fetch_array($out,OCI_ASSOC+OCI_RETURN_NULLS)) {
      ?>
        <tr>
          <td><?php echo $row["fcname"]; ?></td>
          <td><?php echo $row["fcid"]; ?></td>
          <td><?php echo $row["bkname"]; ?></td>
          <td><?php echo $row["Aname"]; ?></td>
          <td><?php echo $row["flvl"]; ?></td>
          <td><?php echo $row["ftrm"]; ?></td>
          <td><?php echo $row["crsID"]; ?></td>
          <td><?php echo $row["radio"]; ?></td>
        </tr>
      <?php
      $i++;
      }
    }
?>


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