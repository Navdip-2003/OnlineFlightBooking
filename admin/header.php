
<!doctype html>
<?php require '../conn.php'; 
  //session_start();
  $email= $_SESSION['email'];
  $str ="select * from admin_data where admin_email='$email'";
  $res = mysqli_query($conn , $str);
  $row=mysqli_fetch_array($res);
  $id = $row[0];
  $_SESSION['admin_id']=$id;
  $name = $row[1];
  $_SESSION['admin_name']=$name;

  if(isset($_POST['logout'])){
    session_destroy();
   
   header('Location: ../index.php');
  }
  
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200&display=swap" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/44f557ccce.js"></script>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <title>Online Flight Booking</title>          
        <link rel = "icon" href =  
            "../assets/images/brand.png" 
        type = "image/x-icon">          
    </head>
<style>
@font-face {
  font-family: 'product sans';
  src: url('../assets/css/Product Sans Bold.ttf');
}
button.btn-outline-light:hover {
  color: cornflowerblue !important;
}
  .navbar-custom {
  
    background-color: #3a3a3a;
  
    font-family: 'product sans', cursive;    
  }
  h4 {
    font-size: 23px !important;
  }
  .dropdown-toggle{
    padding-top: 15px;
  }
  
</style>
    <body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

        <nav class="navbar navbar-custom navbar-expand-lg navbar-dark">
          <a class="navbar-brand text-light" href="index.php"><h4>ADMIN PANEL</h4></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          
             
                <ul class="navbar-nav mr-auto">

                <li class="nav-item">
                    <a class="nav-link" href="adminside.php">
                      <h5 class="ml-2"> Dashboard</h5>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="flight.php">
                      <h5 class="ml-2"> Add Flight</h5>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="all_flights.php">
                      <h5>List Flights</h5>
                    </a>
                  </li>   
                  <li class="nav-item">
                    <a class="nav-link" href="list_airlines.php">
                      <h5>Manage Airlines</h5>
                    </a>
                  </li>              
                
                </ul>
                <ul class="nav navbar-nav navbar-right">
                <li class="nav-item1 dropdown">
          <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: azure;">
            + Airlines
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><input type="text" class="form-control dropdown-item" name="airline" placeholder="Airlines Name"></li>
            <li><input type="number" class="form-control dropdown-item" name="seats" placeholder="Total seats"></li>
          
            <li><button type="submit" name="air_but" class="btn btn-success w-100 dropdown-item">Submit</button></li>
          </ul>
        </li>
                  <li class="nav-item  p-1 border-light ">
                      <a class="nav-link" href="">
                      <h4><i class="ml-1 fa fa-user text-light"> <?php echo $name;  ?></h4></i>
                          <span class="nav_link text-light"
                            style="font-size: 20px;">
                          
                          </span>
                      </a>
                  </li>            
                </ul>                 
                
                <button class="btn btn-outline-light m-2" name ="logout" type="submit">
                    Logout </button>
                </form> 
            </div>
            

        </nav>
        <?php
              if(isset($_POST['air_but'])){
                  $airline =$_POST['airline'];
                  $seats = $_POST['seats'];

                  if($airline !="" && $seats !=""){
                    $str ="insert into airline_data (name , sets) values('$airline' , '$seats')";
                    $res = mysqli_query($conn , $str);
                    
                  }

              }
             

        ?>

    </body>
</html> 