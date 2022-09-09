<?php include '../header.php' ?>
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

.input-group input {
    padding-top: 20px;
    width: 100%;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

input {
    border: 0px !important;
    border-bottom: 2px solid #31B0D5 !important;
    color: cornflowerblue !important;
    border-radius: 0px !important;
    font-weight: bold !important;
    border: none;
    border-bottom: 2px solid #31B0D5;
}

button, input, optgroup, select, textarea {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
}

button, input {
    overflow: visible;
}

input[type="text" i] {
    padding: 1px 2px;
}

        .rating {
          display: inline-block;
          position: relative;
          height: 50px;
          line-height: 50px;
          font-size: 50px;
        }
        .rating label {
          position: absolute;
          top: 0;
          left: 0;
          height: 100%;
          cursor: pointer;
        }
        
        .rating label:last-child {
          position: static;
        }
        
        .rating label:nth-child(1) {
          z-index: 5;
        }
        
        .rating label:nth-child(2) {
          z-index: 4;
        }
        
        .rating label:nth-child(3) {
          z-index: 3;
        }
        
        .rating label:nth-child(4) {
          z-index: 2;
        }
        
        .rating label:nth-child(5) {
          z-index: 1;
        }
        
        .rating label input {
          position: absolute;
          top: 0;
          left: 0;
          opacity: 0;
        }
        
        .rating label .icon {
          float: left;
          color: transparent;
        }
        
        .rating label:last-child .icon {
          color: #000;
        }
        
        .rating:not(:hover) label input:checked ~ .icon,
        .rating:hover label:hover input ~ .icon {
          color: #09f;
        }
        
        .rating label input:focus:not(:checked) ~ .icon:last-child {
          color: #000;
          text-shadow: 0 0 5px #09f;
        }  
        body {
          background: #bdc3c7;  /* fallback for old browsers */
          background: -webkit-linear-gradient(to right, #2c3e50, #bdc3c7);  /* Chrome 10-25, Safari 5.1-6 */
          background: linear-gradient(to right, #2c3e50, #bdc3c7); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        
        }
        @font-face {
          font-family: 'product sans';
          src: url('assets/css/Product Sans Bold.ttf');
          }
        h1 {
          font-size: 50px !important;
          margin-bottom: 20px;  
          color: white;  
          font-family :'product sans' !important;
          text-align: center;
        }
        
        textarea {
          color: cornflowerblue !important;
          border :3px solid #31B0D5 !important;
          background-color: whitesmoke !important;
          font-weight: bold !important;
        }
        textarea:focus {
          outline-style: none !important;
          outline: none !important;
        }
        *:focus {
            outline: none !important;
        }
        input {
            border :0px !important;
            border-bottom: 2px solid #31B0D5 !important;
            color :cornflowerblue !important;
            border-radius: 0px !important;
            font-weight: bold !important;
            border: none;
            border-bottom: 2px solid #31B0D5;      
          }
          label {
            color : #79BAEC !important;
            font-size: 19px;
          }  
          div.form-group label {
            color: cornflowerblue !important;
            font-weight: bold;
          }
          div.rating label{
            font-size: 40px !important;
          }
        .input-group {
          position: relative;
          display: inline-block;
          width: 100%;
        }
        .form-box {
          padding: 40px;
          box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);  
        }
        </style>
</head>
<body>
    <main>
        <div class="container mb-4">
          <h1> <i class="far fa-comment-alt" aria-hidden="true"></i> FEEDBACK</h1>
          <div class="row justify-content-center">
          <div class="col-md-6 bg-light form-box">
            <form action="includes/feedback.inc.php" method="POST">
              <div class="row justify-content-center">  
                  <div class="col-12 ">              
                    <div class="input-group">
                        <label for="user_id">Email</label>
                        <input type="text" name="email" id="user_id" required="">
                      </div>              
                  </div>                      
                  <div class="col-12 mt-4">
                    <div class="form-group">         
                      <label for="exampleFormControlTextarea1">What was your first impression
                          when you entered the website?</label>     
                      <textarea class="form-control" id="exampleFormControlTextarea1" name="1" rows="3" required=""></textarea>
                    </div>                
                  </div>             
                  
                  <div class="col-12 mt-4">
                    <div class="form-group">         
                      <select class="mt-4" name="2" style="border: 0px; border-bottom: 
                      2px solid #31B0D5; background-color: whitesmoke !important;
                      font-weight: bold !important;color :cornflowerblue !important;
                      width:100%" required="">
                        <option selected="" disabled="">How did you first hear about us?</option>
                        <option>Search Engine</option>
                        <option>Social Media</option>
                        <option>Friend/Relative</option>
                        <option>Word of Mouth</option>
                        <option>Television</option>
                        <option>Other</option>
                      </select> 
                    </div>                
                  </div>                   
                  
                  <div class="col-12 mt-4">
                    <div class="form-group">         
                      <label for="exampleFormControlTextarea1">Is there anything missing on this page?</label>     
                      <textarea class="form-control" id="exampleFormControlTextarea1" name="3" rows="3" required=""></textarea>
                    </div>                
                  </div>          
              </div>  
            
              <div class="row">
                <div class="rating ml-3">  
                  <label>
                    <input type="radio" name="stars" value="1" required="">
                    <span class="icon">★</span>
                  </label>
                  <label>
                    <input type="radio" name="stars" value="2" required="">
                    <span class="icon">★</span>
                    <span class="icon">★</span>
                  </label>
                  <label>
                    <input type="radio" name="stars" value="3" required="">
                    <span class="icon">★</span>
                    <span class="icon">★</span>
                    <span class="icon">★</span>
                  </label>
                  <label>
                    <input type="radio" name="stars" value="4" required="">
                    <span class="icon">★</span>
                    <span class="icon">★</span>
                    <span class="icon">★</span>
                    <span class="icon">★</span>
                  </label>
                  <label>
                    <input type="radio" name="stars" value="5" required="">
                    <span class="icon">★</span>
                    <span class="icon">★</span>
                    <span class="icon">★</span>
                    <span class="icon">★</span>
                    <span class="icon">★</span>
                  </label>
                </div>
              </div>
              <div class="row">
                <div class="col text-center">
                  <button name="feed_but" type="submit" class="btn btn-primary mt-3">
                    <div style="font-size: 1.5rem;">
                    <i class="fa fa-lg fa-arrow-right" aria-hidden="true"></i>  
                    </div>
                  </button>
                </div>
              </div>
        
            </form>
          </div>
          </div>
        </div>
        <!-- log on to codeastro.com for more projects -->
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
          // $('#test-form').submit(function(e){
          //   e.preventDefault() ;
          //   alert("Thank you") ;
          // })
        });
        </script>
        </main>
</body>
</html>