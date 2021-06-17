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

  <!------------------Add row script-------------->
  <!---------------------------------------------->
  <script>
    $(document).ready(function () {
  
      // Denotes total number of rows
      var rowIdx = 0;
  
      // jQuery button click event to add a row
      $('#addBtn').on('click', function () {
  
        // Adding a row inside the tbody.
        $('#tbody').append(`<tr id="R${++rowIdx}">
             <td class="row-index text-center">
             <input type="Text" placeholder="BookName">
             </td>
             <td class="row-index text-center">
             <input type="Text" placeholder="AuthorName">
             </td>
             <td class="row-index text-center">
             <input type="Text" placeholder="For which Level">
             </td>
             <td class="row-index text-center">
             <input type="Text" placeholder="For which Term">
             </td>
             <td class="row-index text-center">
             <input type="Text" placeholder="Course ID">
             </td>
             <td class="row-index text-center">
             <label class="container">
                <input type="radio" checked="checked" name="radio">Text
                  <span class="checkmark"></span>
            </label>
            <label class="container">
                <input type="radio" name="radio">Reference
                <span class="checkmark"></span>
            </label>
             </td>
              <td class="text-center">
                <button class="btn btn-danger remove"
                  type="button">Remove</button>
                </td>
              </tr>`);
      });
  
      // jQuery button click event to remove a row.
      $('#tbody').on('click', '.remove', function () {
  
        // Getting all the rows next to the row
        // containing the clicked button
        var child = $(this).closest('tr').nextAll();
  
        // Iterating across all the rows 
        // obtained to change the index
        child.each(function () {
  
          // Getting <tr> id.
          var id = $(this).attr('id');
  
          // Getting the <p> inside the .row-index class.
          var idx = $(this).children('.row-index').children('p');
  
          // Gets the row number from <tr> id.
          var dig = parseInt(id.substring(1));
  
          // Modifying row index.
          idx.html(`Row ${dig - 1}`);
  
          // Modifying row id.
          $(this).attr('id', `R${dig - 1}`);
        });
  
        // Removing the current row.
        $(this).closest('tr').remove();
  
        // Decreasing total number of rows by 1.
        rowIdx--;
      });
    });
  </script>




  <!--======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">Kotha</a></h1>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.html">Home</a></li>
          
          <li class="drop-down"><a href="books.php">Books</a>
            <ul>
              <li><a href="#">Text Books</a>
              
              </li>
              <li><a href="">Magazine</a></li>
              <li><a href="">History Books</a></li>
              
            </ul>
          </li> 
          <li><a href="profilePage.php">Account</a></li>
          <li class="active"><a href="GiveSugg.php">Recommand Books</a></li>
          <li><a href="Contact.php">Contact</a></li>
          <li><a href="">Cart</a></li>
          

        </ul>
      </nav><!-- nav-menu -->

    </div>
  </header><!-- End Header -->


<!------------Stuednt List Table-------------->
<div class="container">
  <h2>Recommend Books For Students.</h2><br>

  <div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th class="text-center">Book Name</th>
            <th class="text-center">Author Name</th>
            <th class="text-center" id="lev">For Level</th>
            <th class="text-center" id="ter">For Term</th>
            <th class="text-center" id="cid">Course ID</th>
            <th class="text-center">Type</th>
            <th class="text-center">..</th>
          </tr>
        </thead>
        <tbody id="tbody">
  
        </tbody>
      </table>
    </div>
    <button class="btn btn-md btn-primary" 
      id="addBtn" type="button">
        Add new Row
    </button>
    <br><br>
  
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
              <li><i class="bx bx-chevron-right"></i> <a href="about.html">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="books.html">All the books</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contact.html">Send us massage</a></li>
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

  
</body>

</html>