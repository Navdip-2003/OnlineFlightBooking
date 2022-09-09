<?php
//session_start();
require 'conn.php';
$email= $_SESSION['email'];
$str ="select * from user_data where email ='$email'";
$res = mysqli_query($conn , $str);
$row=mysqli_fetch_array($res);
$id = $row[0];
$_SESSION['user_id']=$id;
$name = $row[1];
$_SESSION['user_name']=$name;

if(isset($_POST['logout'])){
  session_destroy();
 header('Location: ../index.php');
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    	<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>	
        <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/44f557ccce.js"></script>
       
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <style>
            h5 {
    color: white;
    font-weight: bold;
    font-size: 20px ;
	font-family: 'Montserrat', sans-serif;
            }
            .astext {
    background:none;
    border:none;
    margin:0;
    padding:0;
    cursor: pointer;
            }
</style>

    </head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-transparent ">
        <a class="navbar-brand" href="index.php"><h5>Home</h5>            
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">                                
                            <li class="nav-item">
                    <a class="nav-link" href="my_flight.php">
                        <h5> My Flights</h5>
                    </a>
                </li>       
                <li class="nav-item">
                    <a class="nav-link" href="ticket.php">
                        <h5> Tickets</h5>
                    </a>
                </li>                                                             
                            <li class="nav-item">
                    <a class="nav-link" href="feedback.php">
                        <h5> Feedback</h5>
                    </a>
                </li>   
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <h5> About</h5>
                    </a>
                </li>             
            </ul>   
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item mr-3">
                            
                            <h5 class=" text-light">
                            <i class="ml-1 fa fa-user text-light" aria-hidden="true"></i>
                            <?php
                                echo $_SESSION['user_name'];
                            ?>
                            </h5>
                    </li>          
                    <li class="nav-item ml-3">
                        <form action="" class="logout_form" method="POST">
                        <button class="astext" name="logout" type="submit">
                            <h5> Logout </h5>                            
                            </button>
                        </form> 
                    </li>                       
                </ul>            </div>
        </nav>
</body>
</html>