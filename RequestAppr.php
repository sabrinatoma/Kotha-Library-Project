
<?php
@ob_start();
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Requests for Approval</title>
  
  <!-- Favicons -->
  <link href="./assets/Images/page/books.png" rel="icon">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="CSSAll/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


  <link href="CSSAll/TablesListCSS.css" rel="stylesheet">


  <!--------------------------------------------------------->

<script>
  $(document).ready(function() {
  $("#myytable").on('click', '.remove', function () {
    $(this).closest('tr').remove();
});
});
</script>


  <!--======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="#">Kotha</a></h1>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="Homepage_lib.php">Home</a></li>
          
         <!-- <li class="drop-down"><a href="books.php">Books</a>
            <ul>
              <li><a href="#">Text Books</a>
              
              </li>
              <li><a href="">Magazine</a></li>
              <li><a href="">History Books</a></li>
              
            </ul>
          </li> -->
          <li><a href="profilePage.php">Account</a></li>
          
          <!--<li><a href="StudentList.php">Students</a></li>
          <li><a href="FacultyList.php">Faculties</a></li>
          <li><a href="Suggestion.php">Suggestions</a></li>-->
          <li class="active"><a href="RequestAppr.php">Approve Requests</a></li>
          <li><a href="Report_at_Libr.php">Reports</a></li>
          

        </ul>
      </nav><!-- nav-menu -->

    </div>
  </header><!-- End Header -->


<!------------Stuednt List Table-------------->

<div class="container">
  <h2>Books CheckIn Requests to Approve:</h2>
    
  <p>Search Here..</p>  
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>

  <table id="myytable" class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>ID</th>
        <th>Book Name</th>
        <th>Barcode</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody id="myTable">
        <tr>            
            <td>Ramiza Aliya</td>
            <td>f_201914015</td>
            <td>Digital Logic Design</td>
            <td>Mr John</td>  
            <td><button type="button" class="btn btn-outline-success remove">Approve</button></td> 
            <td><button type="button" class="btn btn-outline-danger remove">Reject</button></td>  
          </tr>
          <tr>            
            <td>Sazia Tabassum</td>
            <td>f_201914040</td>
            <td>Computer & Network Security</td>
            <td>Mr Thomson</td>  
            <td><button type="button" class="btn btn-outline-success remove">Approve</button></td> 
            <td><button type="button" class="btn btn-outline-danger remove">Reject</button></td>  
          </tr>
          <tr>            
            <td>Sabrina Afrin</td>
            <td>s_201914055</td>
            <td>Digital Logic Design</td>
            <td>Mr John</td>  
            <td><button type="button" class="btn btn-outline-success remove">Approve</button></td> 
            <td><button type="button" class="btn btn-outline-danger remove">Reject</button></td>  
          </tr>
          <tr>            
            <td>Abedur Rahman</td>
            <td>s_201914011</td>
            <td>Architectural Engineer's Solutions Suite</td>
            <td>hbsd efj</td>  
            <td><button type="button" class="btn btn-outline-success remove">Approve</button></td> 
            <td><button type="button" class="btn btn-outline-danger remove">Reject</button></td>  
          </tr>
    </tbody>
  </table>
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

    <?php ob_flush();  ?>
</body>

</html>