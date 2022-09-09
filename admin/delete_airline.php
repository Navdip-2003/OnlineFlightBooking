<html>
    <body>

   
<?php
    require '../conn.php';
    if(isset($_GET['airline_id'])){
        $id = $_GET['airline_id'];

        $str = "delete from airline_data where airline_id ='$id'";
        $res=mysqli_query($conn , $str);
        if($res>0){
            header("location: list_airlines.php");

        }

        
    }
?>
 </body>
</html>