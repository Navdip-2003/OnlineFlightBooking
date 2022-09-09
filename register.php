<?php include 'header/header.php' ?>
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
@font-face {
  font-family: 'product sans';
  src: url('assets/css/Product Sans Bold.ttf');
}
h3 {
    text-align: center;
    /* font-family: 'Italianno', cursive; */
    font-family: 'product sans', cursive;      
    font-weight: normal;
    font-size: 55px;
    margin-top: 20px !important;   
}

input {
 
    margin-bottom: 10px;
    border :0px !important;
    border-bottom: 2px solid #838383 !important;
    color :#838383 !important;
    border-radius: 0px !important;
    font-weight: bold !important;
  }
  label {
    color : #838383 !important;      
    font-size: 19px;
  }
.register{
    margin-top: 3%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 60px;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #4e4e4e;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}
</style>
</head>
<body>
<main>
<div class="container-fluid mt-0 register">
<div class="row">
   
    <div class="col-md-1"></div>
    <div class="col-md-10 register-right">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <h3 class="register-heading text-secondary">PASSENGER REGISTRATION</h3>
                <div class="register-form">
                <form method="POST" action="includes/register.inc.php">
                    <div class="conrainer-fluid">
                    <div class="row">
                        <div class="col-1 p-0">
                            <i class="fa fa-user text-secondary" style="float: right;margin-top:35px;" aria-hidden="true"></i>
                        </div>
                        <div class="col-md">
                            <div class="input-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" id="username" required="">                                
                            </div>  
                        </div>
                        <div class="col-1 p-0 mr-2">
                            <i class="fa fa-envelope text-secondary" style="float: right;margin-top:35px;" aria-hidden="true"></i>
                        </div>                    
                        <div class="col-md">
                            <div class="input-group">
                                <label for="email_id">Email</label>
                                <input type="text" name="email_id" id="email_id" required="">                                         
                            </div>                                     
                        </div>                        
                    </div>
                    <div class="form-row">
                    <div class="col-1 p-0">
                            <i class="fa fa-lock text-secondary" style="float: right;margin-top:35px;" aria-hidden="true"></i>
                        </div>                        
                        <div class="col-md">
                            <div class="input-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" required="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter,
                                and at least 8 or more characters">                                        
                            </div>                                     

                        </div>
                        <div class="col-1 p-0 mr-2">
                            <i class="fa fa-lock text-secondary" style="float: right;margin-top:35px;" aria-hidden="true"></i>
                        </div>                        
                        <div class="col-md">
                            <div class="input-group">
                                <label for="password_repeat">Confirm password</label>
                                <input type="password" name="password_repeat" id="password_repeat" required="">
                            </div>                                     
                        </div>                                                                                                  
                    </div>
                    <div class="text-center">
                        <button name="signup_submit" type="submit" class="btn btn-info mt-5">
                            <div style="font-size: 1.5rem;">
                            <i class="fa fa-lg fa-arrow-right" aria-hidden="true"></i> Complete  
                            </div>
                        </button>                            
                    </div>
                    </div>
                </form>
                </div>                        
            </div>
        </div>
    </div> 
    <div class="col-md-1"></div>          
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
</body>
</html>