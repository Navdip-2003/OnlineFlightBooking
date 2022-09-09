<html>
    <body>

   
<?php
    require '../conn.php';
    if(isset($_GET['book_id'])){
        $id = $_GET['book_id'];

        $str = "delete from book_flight where book_id ='$id'";
        $res=mysqli_query($conn , $str);
        if($res>0){
            header('Location: adminside.php');

        }

        
    }
?>
 </body>
</html>