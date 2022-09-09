<?php include '../header.php';
    require '../conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
h2.brand {
    /* font-style: italic; */
    font-size: 27px !important;
}
.vl {
  border-left: 6px solid #424242;
  height: 400px;
}
p.head {
    text-transform: uppercase;
    font-family: arial;
    font-size: 17px;
    margin-bottom: 10px ;
    color: grey;  
}
p.txt {
    text-transform: uppercase;
    font-family: arial;
    font-size: 25px;
    font-weight: bolder;
}
.out {
    border-top-left-radius: 25px;
    border-bottom-left-radius: 25px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);  
    background-color: white;
    padding-left: 25px;
    padding-right: 0px;
    padding-top: 20px;
}
h2 {
    font-weight: lighter !important;
    font-size: 35px !important;
    margin-bottom: 20px;  
    font-family :'product sans' !important;
    font-weight: bolder;
}
.text-light2 {
    color: #d9d9d9;
}
h3 {
    /* font-weight: lighter !important; */
    font-size: 21px !important;
    margin-bottom: 20px;  
    font-family: Tahoma, sans-serif;
    font-weight: lighter;
}
h1 {
    font-weight: lighter !important;
    font-size: 45px !important;
    margin-bottom: 20px;  
    font-family :'product sans' !important;
    font-weight: bolder;
  }
</style>
</head>
<body>
<main>
       
       <div class="container mb-5"> 
       <h1 class="text-center text-light mt-4 mb-4">E-TICKETS</h1>
       <?php
            $user_id = $_SESSION['user_id'];
            $str = "select * from book_flight where user_id = '$user_id' ";
            $res = mysqli_query($conn , $str);
            while($row = mysqli_fetch_array($res)){

                echo '
                <div class="row mb-5">                                                         
                <div class="col-8 out">
                    <div class="row ">                                                     
                        <div class="col">
                            <h2 class="text-secondary mb-0 brand">
                                Online Flight Booking</h2> 
                        </div>
                        <div class="col">
                            <h2 class="mb-0">ECONOMY CLASS</h2>
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-3">  
                        <div class="col-4">
                            <p class="head">Airline</p>
                            <p class="txt">Hindustan Airlines</p>
                        </div>            
                        <div class="col-4">
                            <p class="head">from</p>
                            <p class="txt">'.$row[4].'</p>
                        </div>
                        <div class="col-4">
                            <p class="head">to</p>
                            <p class="txt">'.$row[5].'</p>                
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-8">
                            <p class="head">Passenger</p>
                            <p class=" h5 text-uppercase">
                            '.$row[3].'
                            </p>                              
                        </div>
                        <div class="col-4">
                            <p class="head">board time</p>
                            <p class="txt">12:45</p>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <p class="head">departure</p>
                            <p class="txt mb-1">'.$row[6].'</p>
                            <p class="h1 font-weight-bold mb-3">'.$row[8].'</p>  
                        </div>            
                        <div class="col-3">
                            <p class="head">arrival</p>
                            <p class="txt mb-1">'.$row[7].'</p>
                            <p class="h1 font-weight-bold mb-3"> '.$row[9].'</p>  
                        </div>
                        <div class="col-3">
                            <p class="head">gate</p>
                            <p class="txt">A22</p>
                        </div>            
                        <div class="col-3">
                            <p class="head">seat</p>
                            <p class="txt">'.$row[10].'</p>
                        </div>                
                    </div>                    
                </div>
                           <div class="col-3 pl-0" style="background-color:#376b8d !important;
                               padding:20px; border-top-right-radius: 25px; border-bottom-right-radius: 25px;">
                               <div class="row">  
                                   <div class="col">                                    
                                   <h2 class="text-light text-center brand">
                                       Online Flight Booking</h2> 
                                   </div>                                      
                               </div>                             
                               <div class="row justify-content-center">
                                   <div class="col-12">                                    
                                       <img src="../images/airtic.png" class="mx-auto d-block" height="200px" width="200px" alt="">
                                   </div>                                
                               </div>
                               <div class="row">
                                   <h3 class="text-light2 text-center mt-2 mb-0">
                                   &nbsp; Thank you for choosing us. <br> <br>
                                       Please be at the gate at boarding time</h3>   
                               </div>                            
                           </div>                 
                        </div> 
                        ';
            }
        ?>                                              
                         
                        
   
    </div>
    </main>
</body>
</html>