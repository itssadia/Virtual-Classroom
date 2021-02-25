<?php
$connect=mysqli_connect("localhost","root","","hallinfo");
$sql="select  * from LH order by room_no";
$result=mysqli_query($connect,$sql);


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>
    <table class="table table-striped table-bordered" id="mydatatable">
  <thead>
    <tr>
      <td>Room Number</td> 
     <td>Capacity</td>
     <td>Alloted students</td>
     <td>Vacant</td>
    </tr>
  </thead>
<?php
while($row=mysqli_fetch_array($result))
{
  echo'
  <tr>
    <td>'.$row[room_no].'</td>
     <td>'.$row[capacity].'</td>
      <td>'.$row[student_alloted].'</td>
       <td>'.$row[vacant].'</td>
  </tr>
  ';
}

?>
 
</table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript">
    $(document).ready( function () {
    $('#mydatatable').DataTable();
} );
  </script>
  </body>
</html>