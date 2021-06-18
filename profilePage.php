
<?php
@ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <link href="bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

   <script type="text/javascript" src="JSAll/profilepage_JS.js"></script>

   <link href="CSSAll/profilePageCSS.css" rel="stylesheet">

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
            else if($IDD[0]=='F')
            {
                echo'<li><a href="Homepage_fac.php">Home</a></li>';
            }
            else
            {
                echo'<li><a href="Homepage_lib.php">Home</a></li>';
            }
        ?>
          
          
          <li class="drop-down"><a href="books.php">Books</a>
            <ul>
              <li class="drop-down"><a href="#">Text Books</a>
               
              </li>
              <li><a href="">Magazine</a></li>
              <li><a href="">History Books</a></li>
              
            </ul>
          </li> 
          <li class="active"><a href="profilePage.php">Account</a></li>
          <li><a href="">Contact</a></li>
          <li><a href="selectCart.php">Cart</a></li>
          

        </ul>
      </nav><!-- nav-menu -->

    </div>
  </header><!-- End Header -->
    

<div class="Pcontainer">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <div class="card-title mb-4">
                            <div class="d-flex justify-content-start">
                                <div class="image-container">
                                    <img src="http://placehold.it/150x150" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail" />
                                    <div class="middle">
                                        <input type="button" class="btn btn-secondary" id="btnChangePicture" value="Change" />
                                        <input type="file" style="display: none;" id="profilePicture" name="file" />
                                    </div>
                                </div>
                                <div class="userData ml-3">
                                    <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold">
                                    <?php
                                    echo $_SESSION['NNAME'];
                                    ?>
                                </h2>
                                    <h6 class="d-block">
                                    <?php
                                     echo $_SESSION['DDEPT'];
                                     ?>
                                    </h6>
                                    <h6 class="d-block">Level, Term</h6>
                                </div>
                                <div class="ml-auto">
                                    <input type="button" class="btn btn-primary d-none" id="btnDiscard" value="Discard Changes" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-10">
                                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#basicInfo">Basic Info</a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#BorrowedList">Borrowed List</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#Fine">Fine</a>
                                    </li>
                                </ul>

                                 <!-- Tab panes -->
                                <div class="tab-content ml-1" id="myTabContent">
                                    <div id="basicInfo" class="tab-pane fade show active"><br>
                                        
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Full Name</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                            <?php
                                    echo $_SESSION['NNAME'];
                                    ?>
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Depertment</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                            <?php
                                    echo $_SESSION['DDEPT'];
                                    ?>
                                            </div>
                                        </div>
                                        <hr />
                                        
                                        
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">E-Mail</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                            <?php
                                    echo $_SESSION['Mail_ID'];
                                    ?>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Contact Number</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                            <?php
                                    echo $_SESSION['PPHONE'];
                                    ?>
                                            </div>
                                        </div>
                                        <hr />
                                        <!--<div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Batch</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                CSE-19
                                            </div>
                                        </div>-->
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Book Borrowed</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                5
                                            </div>
                                        </div>
                                        

                                    </div>
                                    <div id="BorrowedList" class="container tab-pane fade"><br>
                                        <div class="row">                                            
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Something</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                Something
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Something</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                Something
                                            </div>
                                        </div>
                
                                    </div>

                                    <div id="Fine" class="container tab-pane fade"><br>
                                        
                
                                    </div>


                                    <br><br>

                                    
                                </div>
                            </div>
                        </div>


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
              <li><i class="bx bx-chevron-right"></i> <a href="Homepage.php">Home</a></li>
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
//session_start();
        echo $_SESSION['Mail_ID'];
        echo $_SESSION['PASSWORD'];
        echo $_SESSION['NNAME'];
        echo $_SESSION['DDEPT'];

        ob_flush();
?>


</body>
</html>