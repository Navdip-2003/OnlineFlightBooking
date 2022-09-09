<html>
    <body>

   
<?php
    require '../conn.php';
    if(isset($_GET['flight_id'])){
        $id = $_GET['flight_id'];

        $str = "delete from flight_data where flight_id ='$id'";
        $res=mysqli_query($conn , $str);
        if($res>0){
            header("location: all_flights.php");

        }

        
    }
?>
 </body>
</html>