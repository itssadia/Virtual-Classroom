<?php
$connect=mysqli_connect("localhost","root","","hallinfo");
$sql="select  * from LH order by room_no";
$result=mysqli_query($connect,$sql);


?>
<!DOCTYPE html>  
 <html>  
      <head>  
           <title>LH info</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
      <body>  
           <br /><br />  
           <div class="container">  
                <h3 align="center">Deshratna Sheikh Hasina Hall</h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="mydatatable" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                   <td>Room Number</td> 
                                   <td>Capacity</td>
                                   <td>Alloted students</td>
                                   <td>Vacant</td>
                               </tr>  
                          </thead>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo '  
                               <tr>  
                                   <td>'.$row['room_no'].'</td>
                                   <td>'.$row['capacity'].'</td>
                                    <td>'.$row['student_alloted'].'</td>
                                     <td>'.$row['vacant'].'</td>
                               </tr>  
                               ';  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#mydatatable').DataTable();  
 });  
 </script>  
