<html>
    <body>

   
<?php
    require '../conn.php';
    if(isset($_GET['user_id'])){
        $id = $_GET['user_id'];
        //echo $id;
        $str = "delete from user_data where id ='$id'";
        $res=mysqli_query($conn , $str);
        
            header('Location: adminside.php');

       

        
    }
?>
 </body>
</html>