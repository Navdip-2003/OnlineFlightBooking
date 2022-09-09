<?php 
include ('header/header.php'); 
if(isset($_POST['login'])){
  include('conn.php');
  $error="";

  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $pass = mysqli_real_escape_string($conn,$_POST['pass']);

  if ($email != "" && $pass != ""){

      $sql_query = "select count(*) as cntUser from user_data where email='".$email."' and pass='".$pass."'";
      $result = mysqli_query($conn,$sql_query);
      $row = mysqli_fetch_array($result);
      $count = $row['cntUser'];
      if($count > 0){
        $_SESSION['email']=$email;
          header('Location: user/index.php');
      }else{
          $error= "Invalid username and password";
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
   
background: -webkit-linear-gradient(to right, #2c3e50, #bdc3c7);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #2c3e50, #bdc3c7); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


  
  }    
  input {
    border :0px !important;
    border-bottom: 2px solid #838383 !important;
    color :#838383 !important;
    border-radius: 0px !important;
    font-weight: bold !important;
    background-color: whitesmoke !important;  
    border: none;
    border-bottom: 2px solid #838383;      
  }
  *:focus {
    outline: none !important;
  }
  label {
    color : #838383 !important;
    font-size: 19px;
  }
  h5.form-name {
    color: #838383;
    font-family: 'Courier New', Courier, monospace;
    font-weight: 50;
    margin-bottom: 0px !important;
    margin-top: 10px;
  }
  h5 {
    color: #ffffff;
    font-weight: bold;
    font-size: 22px ;
	  font-family: 'Montserrat', sans-serif;    
  }
  a:hover {
    text-decoration: none;
  }
  
  @font-face {
  font-family: 'product sans';
  src: url('assets/css/Product Sans Bold.ttf');
  }
  h1 {
    font-size: 46px !important;
    margin-bottom: 20px;  
    font-family :'product sans' !important;
    font-weight: bolder;
  }
  div.form-out {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);  
    background-color: whitesmoke !important;
    padding: 40px;
    margin-top: 60px;
  }
  .input-group {
  position: relative;
  display: inline-block;
  width: 100%;
}
  select {
    float: right;
    font-weight: bold !important;
    color :#838383 !important;
  }
  @media screen and (max-width: 768px){
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
      <h1 class="text-secondary text-center">LOG IN PANEL</h1>
      
      <form method="POST" class=" text-center" action="<?php echo $_SERVER['PHP_SELF']?>">

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
        <div class="row mt-3">
       
          <div class="col">
          <a id="reset-pass" class="mr-5" href="reset-pwd.php" style="float: right !important;">Reset Password</a>        
          </div>         
        </div>   
        <div class="row mt-4">
          <div class="col">
            <a href="register.php">
              <button type="button" class="btn btn-info mt-3">
                <div style="font-size: 1.5rem;">
                <i class="fas fa-user-plus text-light" aria-hidden="true"></i> Register
                </div>
              </button>
            </a> 
          </div> 
          <div class="col">
            <button name="login" type="submit" class="btn btn-success mt-3">
              <div style="font-size: 1.5rem;">
              <i class="fa fa-lg fa-arrow-right" aria-hidden="true"></i> Login
              </div>
            </button>
          </div>      
        </div>       
        
      </form><lable><?php echo "Plese Enter valid Username And Password"; ?></lable> 
      <?php
        
      ?>
      
    </div>
    <div class="col-md-3"></div>
    </div>
</div>  


      <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>     
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  


 
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
</main>

<?php 'header/footer.php'?> 
 <footer style="
        position: absolute;
      bottom: 0;
      width: 100%;
      height: 2.5rem;  
    ">
	<em><h5 class="text-light text-center p-0 brand mt-2">
				<img src="assets/images/airtic.png" 
					height="40px" width="40px" alt="">				
			Online Flight Booking</h5></em>
	<p class="text-light text-center">&copy; <?php echo date('Y')?></p>
</footer>
</body>
</html>