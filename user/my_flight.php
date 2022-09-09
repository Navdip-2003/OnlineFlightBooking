
<?php  include '../header.php';
require '../conn.php';
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
        <!-- Bootstrap CSS -->
		<!-- log on to codeastro.com for more projects -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
body {
  background: #bdc3c7;  /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #2c3e50, #bdc3c7);  /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to right, #2c3e50, #bdc3c7); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}
@font-face {
  font-family: 'product sans';
  src: url('../assets/css/Product Sans Bold.ttf');
}
div.out {
    padding: 30px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); 
    border-top-left-radius: 20px;
    border-bottom-right-radius: 20px;
}
.city {
    font-size: 24px;
}
p {
    margin-bottom: 10px;
    font-family: product sans;
}
.alert {
    /* font-family: 'Courier New', Courier, monospace; */
    font-weight: bold;
}
.date {
    font-size: 24px;
}
.time {
    font-size: 27px;
    margin-bottom: 0px;
}
.stat {
    font-size: 17px;
}
h1 {
    font-weight: lighter !important;
    font-size: 45px !important;
    margin-bottom: 20px;  
    font-family :'product sans' !important;
    font-weight: bolder;
  }
.row {
    background-color: white;
}
@font-face {
  font-family: 'product sans';
  src: url('../assets/css/Product Sans Bold.ttf');
  }

</style>
</head>
<body>

<main>
    <div class="container">
    <h1 class="text-center text-light mt-4 mb-4">FLIGHT STATUS</h1>
    
                            

                        <?php 
                            $user_id = $_SESSION['user_id'];
                            $str = "select * from book_flight where user_id = '$user_id' ";
                            $res = mysqli_query($conn , $str);
                            while($row = mysqli_fetch_array($res)){

                            

                            
                            
                            
                            echo '
                            <div class="row out mb-5 ">
                                <div class="col-md-4 order-lg-3 order-md-1"> 
                                    <div class="row">
                                        <div class="col-1 p-0 m-0">
                                            <i class="fa fa-2x fa-fighter-jet mt-3 text-success" style="float: right;" aria-hidden="true"></i>
                                        </div>
                                        <div class="col-10 p-0 m-0 mt-3" style="float: right;">
                                            <hr style="background-color: lightgrey;">
                                        </div>   
                                        <div class="col-1 p-0 m-0">
                                            <i class="fa fa-circle mt-4" style="color: lightgrey;" aria-hidden="true"></i>
                                        </div>                             
                                    </div>                            
                                    
                                </div>
                        
                                <div class="col-md-3 col-6 order-md-2 pl-0 text-center 
                                    order-lg-2 card-dep">
                                    <p class="city">'.$row[3].'</p>
                                    <p class="stat">Scheduled Departure:</p>
                                    <p class="date">'.$row[5].'</p>                
                                    <p class="time"> '.$row[7].'</p>
                                </div>        
                                <div class="col-md-3 col-6 order-md-4 pr-0 text-center 
                                    order-lg-4 card-arr" style="float: right;">
                                    <p class="city">'.$row[4].'</p>
                                    <p class="stat">Scheduled Arrival:</p>
                                    <p class="date">'.$row[6].'</p>                
                                    <p class="time"> '.$row[8].'</p>          
                                </div>
                                <div class="col-lg-2 order-md-12">
                                    <div class="alert alert-primary mt-5 text-center" role="alert">
                                    <font size="4">
                                        <lable>$ '.$row[11].'<lable><br>
                                       <a href="cancle_flight.php?book_id='.$row[0].'">
                                          Cancel  </a>
                                    </font>
                                       
                                    </div>
                                </div>  
                                
                                
                            </div> 
                            ';}

                        ?>
                                
</div>

</main>
</body>
</html>