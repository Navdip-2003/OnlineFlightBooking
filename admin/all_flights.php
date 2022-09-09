<?php
include 'header.php';
require '../conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Flights</title>
    

    <style>
    
    table {
          background-color: white;
        }
        h1 {
          margin-top: 20px;
          margin-bottom: 20px;
          font-family: 'product sans';  
          font-size: 45px !important; 
          font-weight: lighter;
        }
        a:hover {
          text-decoration: none;
        }
        body {
          /* background-color: #B0E2FF; */
          background-color: #efefef;
        }
        th {
          font-size: 22px;
         
        }
        td {
          margin-top: 10px !important;
          font-size: 16px;
          font-weight: bold;
          font-family: 'Assistant', sans-serif !important;
        }
        </style>
</head>
<body>

    
    <main>
        <div class="container-md mt-2">
  <h1 class="display-4 text-center">FLIGHT LIST</h1>
  <table class="table table-bordered">
    <thead class="table-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Arrival</th>
        <th scope="col">Departure</th>
        <th scope="col">Source</th>
        <th scope="col">Destination</th>
        <th scope="col">Airline</th>
        <th scope="col">Duration</th>
        <th scope="col">Price</th>
        <th scope="col">Remove</th>
      </tr>
    </thead>
    <tbody>
                
                <?php
                $sql = "select * from flight_data";
                $res = mysqli_query($conn , $sql);
               
                while ($row = mysqli_fetch_assoc($res)) {
                  echo "
                  <tr class='text-center'>                  
                    <td>".$row['flight_id']."</td>
                    <td>".$row['start_date']." -- ".$row['start_time']."</td>
                    <td>".$row['end_date']." -- ".$row['end_time']."</td>
                    <td>".$row['place_to']."</td>
                    <td>".$row['place_from']."</td>
                    <td>".$row['airline']."</td>                
                    <td>".$row['duration']."-Hours</td>
                    <td>$ ".$row['prize']."</td>
                    <td><a href='delete_flight.php?flight_id=".$row['flight_id']."'>Delete</a></td>
                              
                  </tr>
                  ";
                }
              ?>

      </tbody>
     <?php 
    
    
    
    
    
    // ?>

  </table>

</div>

</main>
</body>
</html>