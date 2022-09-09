<?php
include 'header.php';
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
  <h1 class="display-4 text-center">AIRLINES LIST</h1>
  <table class="table table-bordered">
    <thead class="table-dark">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Seats</th>
        <th scope="col">Action</th>

      </tr>
    </thead>
    <tbody>
       
    <?php
          $sql = "select * from airline_data";
          $res = mysqli_query($conn , $sql);
               
          while ($row = mysqli_fetch_assoc($res)) {
          echo "
            <tr class='text-center'>                  
                  <td>".$row['airline_id']."</td>
                   
                  <td>".$row['name']."</td>
                  <td>".$row['sets']."</td>
                  <td><a href='delete_airline.php?airline_id=".$row['airline_id']."'>Delete</a></td>
                              
                  </tr>
          ";
          }
      ?>

    </tbody>
  </table>

</div>

</main>
</body>
</html>