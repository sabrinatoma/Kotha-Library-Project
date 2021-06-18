<!DOCTYPE html>
<html lang="en">
<head>
  <title>Borrow History</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
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


</body>
</html>
