<?php include 'header/header.php';
  if(isset($_POST['login'])){
    include('conn.php');

    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $pass = mysqli_real_escape_string($conn,$_POST['pass']);

    if ($email != "" && $pass != ""){

        $sql_query = "select count(*) as cntUser from admin_data where admin_email='".$email."' and admin_pass='".$pass."'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);
        $count = $row['cntUser'];
        if($count > 0){
          $_SESSION['email']=$email;
            header('Location: admin/adminside.php');
        }else{
            echo "Invalid username and password";
        }


    }
  }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/form.css">
<style>
  body {
    
    background: #bdc3c7;  
background: -webkit-linear-gradient(to right, #2c3e50, #bdc3c7); 
background: linear-gradient(to right, #2c3e50, #bdc3c7); 
   
  }    
  input {
    border :0px !important;
    border-bottom: 2px solid #424242 !important;
    color :#424242 !important;
    border-radius: 0px !important;
    font-weight: bold !important;
    background-color: whitesmoke !important;    
  }
  *:focus {
    outline: none !important;
  }
  label {
    color : #828282 !important;
    font-size: 19px;
  }
  h5.form-name {
    color: #424242;
    font-family: 'Courier New', Courier, monospace;
    font-weight: 50;
    margin-bottom: 0px !important;
    margin-top: 10px;
  }
  h1 {
    font-size: 45px !important;
    margin-bottom: 20px;  
    font-family :'product sans';
    font-weight: bolder;
  }
  div.form-out {
   
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);  
    background-color: whitesmoke !important;
    padding: 40px;
    margin-top: 80px;
  }
  .input-group {
  position: relative;
  display: inline-block;
  width: 100%;
}
  select {
    float: right;
    font-weight: bold !important;
    color :#424242 !important;
  }
  @media screen and (max-width: 900px){
    body {
      background-color: lightblue;
      background-image: none;
    }
    div.form-out {
    padding: 20px;
    background-color: none !important;
    margin-top: 20px;
  }  
}  
</style>
</head>
<body>
<main>
<div class="container mt-0">
  <div class="row">
        <div class="col-md-3"></div>
      <div class="bg-light form-out col-md-6">
      <h1 class="text-secondary text-center">ADMIN LOGIN</h1>
      
      <form method="POST" class=" text-center" action="<?php echo $_SERVER['PHP_SELF']; ?>">

        <div class="form-row">  
            <div class="col-1 p-0 mr-1">
                <i class="fa fa-user text-secondary" style="float: right;margin-top:35px;" aria-hidden="true"></i>
            </div> 
          <div class="col-10 mb-2">              
            <div class="input-group">
                <label for="user_id">Username/ Email</label>
                <input type="text" name="email" id="user_id" required="">
              </div>              
          </div>       
          <div class="col-1 p-0 mr-1">
                <i class="fa fa-lock text-secondary" style="float: right;margin-top:35px;" aria-hidden="true"></i>
          </div>                
          <div class="col-10">
            <div class="input-group">
                <label for="user_pass">Password</label>
                <input type="password" name="pass" id="user_pass" required="">
              </div>            
          </div>          
        </div>              

        <button name="login" type="submit" class="btn btn-danger mt-5">
          <div style="font-size: 1.5rem;">
          <i class="fa fa-lg fa-arrow-right" aria-hidden="true"></i> Login 
          </div>
        </button>
      </form>
    </div>
    <div class="col-md-3"></div>
    </div>
</div>    
</main>

<?php include 'header/footer.php'; ?>

<script>
$(document).ready(function(){
  $('.input-group input').focus(function(){
    me = $(this) ;
    $("label[for='"+me.attr('id')+"']").addClass("animate-label");
  }) ;
  $('.input-group input').blur(function(){
    me = $(this) ;
    if ( me.val() == ""){
      $("label[for='"+me.attr('id')+"']").removeClass("animate-label");
    }
  }) ;
 
});
</script>

</body>
</html>