<?php
@ob_start();
session_start();
?>

<?php
$usr_name1 = 'DMBS1';
$pass1 = '12345';

$connectionString1 = 'localhost/xe';

$connect1 = oci_connect($usr_name1,$pass1,$connectionString1);


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Reports</title>
  
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

  <link href="CSSAll/Repot_at_LibrCSS.css" rel="stylesheet">

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
          <li><a href="RequestAppr.php">Approve Requests</a></li>
          <li class="active"><a href="Report_at_Libr.php">Reports</a></li>
          

        </ul>
      </nav><!-- nav-menu -->

    </div>
  </header><!-- End Header -->


<!------------Stuednt List Table-------------->

<div class="container">
  <h2>Reports & Requests from Students & Faculties:</h2>
  <br><br>
    
  <div class="row">
        <div class="col-10">
            <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#report">Reports</a>
                </li>
                                    
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#reqToCollect">Requests to Collect Books</a>
                </li>
                
            </ul>

            <!-- Tab panes -->
            <div class="tab-content ml-1" id="myTabContent">
                <div id="report" class="tab-pane fade show active"><br>

                <p>Search Librarian:</p>  
                <input class="form-control" id="myInput1" type="text" placeholder="Search..">
                <br>
                <td><button type="button" class="btn btn-outline-success remove">Solved</button></td>
                

              <?php
              echo '<table id="mytable1" class="table table-hover">'
              ?>
                
    <?php echo '<thead>
      <tr>
        <th>Name</th>
        <th>ID</th>
        <th>Email</th>
        <th>Topic</th>
        <th>Report</th>
        <th>..</th>
      </tr>
    </thead>'?>

<?php
$show_table = 'select * from reporttable';
$out = oci_parse($connect1,$show_table);
oci_execute($out);

while ($row = oci_fetch_array($out, OCI_RETURN_NULLS+OCI_ASSOC)) {
  /*echo '<tr>';
  foreach ($row as $item) {
      echo '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
             
  }
  echo '<td><button type="button" name="collected" class="btn btn-outline-success remove">Collected</button></td>';
  //echo '<td><input type="checkbox" name="record"></td>';
  echo '</tr>';
  */

  echo "
  <tr>
  <td>".$row['NAME']."</td>
  <td>".$row['ID']."</td>
  <td>".$row['EMAIL']."</td>
  <td>".$row['TOPIC']."</td>
  <td>".$row['REPORT_MASSAGE']."</td>
  
  
  ";?>
  
  <td><button type="button" name="collected" class="btn">
  <a href="email.php?em=<?php echo $row['EMAIL']; ?>" onclick='return checkemail()'>
  Solved</a></button></td>
  
  <td><button type="button" name="collected" class="btn btn-outline-danger">
  <a href="delete.php?bn=<?php echo $row['BOOK_NAME']; ?>" onclick='return checkdelete()'>
  Remove</a></button></td></tr>





}

?>

<?php echo '</table>' ?>
</div>
  <!-----------search--------->

  <script>
    $(document).ready(function(){
      $("#myInput1").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable1 tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
    </script>

<script>
$(document).ready(function () {
    // Find and remove selected table rows
    $(".remove").click(function(){
            $("table tbody").find('input[name="record"]').each(function(){
            	if($(this).is(":checked")){
                    $(this).parents("tr").remove();
                }
            });
        });
    });
</script>



            

            <!-- Tab panes -->
            <div id="reqToCollect" class="container tab-pane fade"><br>
            <p>Search Librarian:</p>  
              <input class="form-control" id="myInput2" type="text" placeholder="Search..">
              <br>
              <?php
              echo '<table id="myytable" method="POST" class="table table-hover">'
              ?>
              
    <?php echo '<thead>
      <tr>
        <th>Name</th>
        <th>ID</th>
        <th name="person_email">Email</th>
        <th>Book Name</th>
        <th>Author Name</th>
        <th>..</th>
      </tr>
    </thead>'?>

<?php
$show_table = 'select * from Requst_book';
$out = oci_parse($connect1,$show_table);
oci_execute($out);

$e_mail= '';
$b_name = '';

while ($row = oci_fetch_array($out, OCI_RETURN_NULLS+OCI_ASSOC)) { 
  /*<!--
  echo '<tr>';
  foreach ($row as $item) {
      echo '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
             
  }
  
  echo '<td><button type="button" name="collected" class="btn btn-outline-success remove">Collected</button></td>';
  echo '</tr>';     -->*/



echo "
<tr>
<td>".$row['NAME']."</td>
<td>".$row['ID']."</td>
<td>".$row['EMAIL']."</td>
<td>".$row['BOOK_NAME']."</td>
<td>".$row['AUTHOR_NAME']."</td>


";?>

<td><button type="button" name="collected" class="btn">
<a href="email.php?em=<?php echo $row['EMAIL']; ?>" onclick='return checkemail()'>
Collected</a></button></td>

<td><button type="button" name="collected" class="btn btn-outline-danger">
<a href="delete.php?bn=<?php echo $row['BOOK_NAME']; ?>" onclick='return checkdelete()'>
Remove</a></button></td></tr>

<?php //echo '<td><a href="delete.php?Prid=$row[ID]">Collected</a></td>
//echo '<td><button type="button" name="collected" class="btn btn-outline-success deletebtn">Collected</button></a></td></tr>';

//echo '<td><button type="submit" name="collected" class="btn btn-outline-success deletebtn">Collected</button></td></tr>';

}
?>


<?php echo '</table>' ?>




<!-----------row deletion script------------>
<!--
<script>
$(document).ready(function()
{
  $('.deletebtn').on('click', function()
  {
    $('#deletemodal').modal('show');

    $tr = $(this).closest('tr');

    var data = $tr.children("td").map(function(){
      return $(this).text();
    }).get();

    console.log(data);

    $('#delete_id').val(data[0]);

  })
})

</script> -->

<!-----------row deletion modal------------>

 <!--
<div class="modal" id="deletemodal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header 
      <div class="modal-header">
        <h4 class="modal-title">Delete Data</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body 
      <form action="delete.php" method="POST">

      <div class="modal-body">
        <input type="hidden" name="delete_id" id="delete_id">
        <h5>Are you sure you want to delete this Data?</h5>
      </div>

      <!-- Modal footer 
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="deletedata" class="btn btn-danger">Delete</a></button>
      </div>
      </form>
    </div>
  </div>
</div>
-->

<!-----------row deletion modal end------------>




<?php


}
?>




<script>
function checkemail()
{
  alert('Are you sure about sending Email?');
  //window.location = 'email.php';
}
</script>

<script>
function checkdelete()
{
  //alert('Are you sure about removing this data?');
  //window.location = 'email.php';
  
}
</script>




  

<!-----------row deletion script end------------>



  
</div>          

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

        </div>
    </div>

</div>
</div>





<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


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

