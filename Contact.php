
<?php
@ob_start();
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Contact</title>
  
  <!-- Favicons -->
  <link href="./assets/Images/page/books.png" rel="icon">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="CSSAll/bootstrap.min.css" rel="stylesheet">

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

      <h1 class="logo mr-auto"><a href="index.html">Kotha</a></h1>
      <nav class="nav-menu d-none d-lg-block">
        <ul>

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
        
          
         
          <li><a href="profilePage.php">Account</a></li>
         
          <li class="active"><a href="Contact.php">Contact</a></li>
          
          

        </ul>
      </nav><!-- nav-menu -->

    </div>
  </header><!-- End Header -->


<!------------Stuednt List Table-------------->

<div class="container">
  <h2>For Any Query or Need, Contact With Us.</h2><br>
    

  <div class="row">
        <div class="col-10">
            <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#report">Report</a>
                </li>
                                    
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#LibrarianList">Contact Librarians</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#requestBook">Request a Book</a>
                </li>

            </ul>

            <!-- Tab panes -->
            <div class="tab-content ml-1" id="myTabContent">
                <div id="report" class="tab-pane fade show active"><br>
                <form action="Contact.php" method="POST">
                    <div class="form-row">
                        <div class="col">
                            <input type="text" name="Pname" class="form-control" id="name" placeholder="Enter Your Name" name="name">
                        </div>
                        <div class="col">
                            <input type="text" name="Pid" class="form-control" id="id" placeholder="Enter Your ID" name="id">
                        </div>
                        <br><br>
                            <input type="text" name="Pemail" class="form-control" id="topic" placeholder="Enter Your Email" name="topic">
                        <br><br>
                            <input type="text" name="topic" class="form-control" id="topic" placeholder="What its about?" name="topic">
                        <br>
                        <br>
                        <textarea class="form-control" name="reportmsg" rows="5" id="msg" placeholder="Your Massage.." name="msg"></textarea>
                        <br><br><br>
                    </div>
                    <br><button type="submit" name="save" class="btn btn-primary">Submit</button>
                    <br><br>
                </form>
            </div>

            <!-- Tab panes -->
            <div id="LibrarianList" class="container tab-pane fade"><br>
            <p>Search Librarian:</p>  
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
              
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Librarian ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone No.</th>
        <th>Designation</th>
      </tr>
    </thead>
    <tbody id="myTable">
      <tr>
        <td>l_564543234</td>
        <td>MD kuddus Ali</td>
        <td>kuddus@gmail.com</td>
        <td>01928374652</td>
        <td>Library Manager</td>                
      </tr>
      <tr>
        <td>l_840239349</td>
        <td>MD Rohim</td>
        <td>rohim@gmail.com</td>
        <td>017399402923</td>
        <td>Library Manager</td>                
      </tr>
      <tr>
        <td>l_5634524133</td>
        <td>MD Taher vhuiya</td>
        <td>tvhuiya@gmail.com</td>
        <td>0192872932</td>
        <td>Library Assistent</td>                
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
            

<!-- Tab panes -->
<div id="requestBook" class="container tab-pane fade"><br>
<form action="Contact.php" method="POST">
    <div class="form-row">
        <div class="col">
            <input type="text" name="Prname" class="form-control" id="name" placeholder="Enter Your Name">
        </div>
        <div class="col"><!--ekhaner Prid Report_at_libr te niye row delete korte hobe-->
            <input type="text" name="Prid" class="form-control" id="id" placeholder="Enter Your ID">
        </div>
            <br><br>
            <input type="text" name="Premail" class="form-control" id="email" placeholder="Enter your Email">
            <br><br>          
            <input type="text" name="bkname" class="form-control" id="Bookname" placeholder="Name of the Book">
            <br><br>
            <input type="text" name="arname" class="form-control" id="authorname" placeholder="Name of the Author">
            <br><br>
            
    </div>
        <br><button type="submit" name="saave" class="btn btn-primary">Submit</button>
        <br><br>
</form>
</div>



        </div>
    </div>

</div>
</div>




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
  ob_flush();
  ?>
</body>

</html>

<!----Contact---->

<?php 
    //request book
    $usr_name1 = 'DMBS1';
    $pass1 = '12345';

    $connectionString1 = 'localhost/xe';

    $connect1 = oci_connect($usr_name1,$pass1,$connectionString1);
    if(isset($_POST['saave']))
    { 
      $Prname = $_POST['Prname'];
      $Prid = $_POST['Prid'];
      $Premail = $_POST['Premail'];
      $bkname = $_POST['bkname'];
      $arname = $_POST['arname'];
      $_SESSION['Pr_ID']=$Prid;
      //$_SESSION['Pr_EmailID']=$Premail;

      $command1 = 'insert into Requst_book';
      $datas1 = ' values (' . "'".$Prname."'". "," . "'".$Prid."'". "," . "'".$Premail."'". ",". "'".$bkname."'". ",". "'".$arname."'".')';
      //echo $datas;
      $command1.=$datas1;
      $out1 = oci_parse($connect1,$command1);
      $res1 = oci_execute($out1);

      $j=0;
      while($row1=oci_fetch_array($out1,OCI_ASSOC+OCI_RETURN_NULLS)) {
      ?>
        <tr>
          <td><?php echo $row1["Prname"]; ?></td>
          <td><?php echo $row1["Prid"]; ?></td>
          <td><?php echo $row1["Premail"]; ?></td>
          <td><?php echo $row1["bkname"]; ?></td>
          <td><?php echo $row1["arname"]; ?></td>
        </tr>
      <?php
      $j++;
      }   
    }
?>


<?php 
//report
$usr_name = 'DMBS1';
    $pass = '12345';

    $connectionString = 'localhost/xe';

    $connect = oci_connect($usr_name,$pass,$connectionString);
    
    if(isset($_POST['save']))
    { 
      $Pname = $_POST['Pname'];
      $Pid = $_POST['Pid'];
      $Pemail = $_POST['Pemail'];
      $topic = $_POST['topic'];
      $reportmsg = $_POST['reportmsg'];

      $command = 'insert into ReportTable';
      $datas = ' values (' . "'".$Pname."'". "," . "'".$Pid."'". ",". "'".$Pemail."'". ",". "'".$topic."'". ",". "'".$reportmsg."'".')';
      //echo $datas;
      $command.=$datas;
      $out = oci_parse($connect,$command);
      $res = oci_execute($out);

      $i=0;
      while($row=oci_fetch_array($out,OCI_ASSOC+OCI_RETURN_NULLS)) {
      ?>
        <tr>
          <td><?php echo $row["Pname"]; ?></td>
          <td><?php echo $row["Pid"]; ?></td>
          <td><?php echo $row["Pemail"]; ?></td>
          <td><?php echo $row["topic"]; ?></td>
          <td><?php echo $row["reportmsg"]; ?></td>
        </tr>
      <?php
      $i++;
      }
    }
?>



