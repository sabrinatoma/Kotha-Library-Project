<!DOCTYPE html>
<html lang="en">
<head>
  <title>Borrow History</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
    crossorigin="anonymous">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  <link href="CSSAll/borrowHistoryCSS.css" rel="stylesheet">

</head>
<body>

<div class="container">

<div class="info">
    <div class="name"><i class="fa fa-user" aria-hidden="true"></i><strong>Amrin Pinky</strong></div>
</div>

  <h2>List of borrowed Books:</h2>

  <p>Search:</p>  
  <input class="form-control" id="myInput" type="text" placeholder="Type Something..">
  <br>
  <td><button type="button" class="btn remove">Checked Out</button></td>
  <br>
              
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Book Name</th>
        <th>BarCode</th>
        <th>Issue Date</th>
        <th>Due Date</th>
        <th>Remaining Days</th>
        <th>Fine (Taka)</th>
        <th>..</th>
      </tr>
    </thead>
    <tbody id="myTable">
      <tr>
        <td>Automotive Mechanics</td>
        <td>B-Vh402jn</td>
        <td>04/03/2021</td>
        <td>05/07/2021</td>
        <td>17</td>
        <td>0</td>  
        <td><input type="checkbox" name="record"></td>              
      </tr>
      <tr>
        <td>Dictionary of Mechanical Engineering</td>
        <td>B-3jna02n</td>
        <td>04/03/2021</td>
        <td>05/06/2021</td>
        <td>-13</td>
        <td>65</td>
        <td><input type="checkbox" name="record"></td>                
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




<!--
<script>
$(document).ready(function () {

// Denotes total number of rows
var rowIdx = 0;

// jQuery button click event to remove a row.
$('#myTable').on('click', '.remove', function () {
  
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
-->


</body>
</html>
