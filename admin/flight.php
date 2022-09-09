<?php
include 'header.php';

?>
<?php require '../conn.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Flight</title>
    
  <style>
        
        input {
          border :0px !important;
          border-bottom: 2px solid #5c5c5c !important;
         
          border-radius: 0px !important;
          font-weight: bold !important;
          background-color: whitesmoke !important;    
        }
        *:focus {
          outline: none !important;
        }
        label {
          /* color : #79BAEC !important; */
          color: #5c5c5c !important;
          font-size: 19px;
        }
        h5.form-name {
          
          font-weight: 50;
          margin-bottom: 0px !important;
          margin-top: 10px;
        }
        h1 {
          font-size: 45px !important;
          font-family: 'product sans';  
          margin-bottom: 20px;  
        }
       div.row{
    margin-top: 33px;   
    } 
        body {
          
          background-color: #efefef;

        }
        div.form-out {
          box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);  
          background-color: whitesmoke !important;
          padding: 40px;
          margin-top: 30px;
        }
        select.airline {
          float: right;
          font-weight: bold !important;
          /* color :cornflowerblue !important; */
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
            
              <div class="bg-light form-out col-md-12">
              <h1 class="text-secondary text-center">ADD FLIGHT DETAILS</h1>
        
              <form method="POST" class=" text-center" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        
                <div class="form-row mb-4">
                  <div class="col-md-3 p-0">
                    <h5 class="mb-0 form-name">DEPARTURE</h5>
                  </div>
                  <div class="col">       
                    <input type="date" name="source_date" class="form-control" required="">
                  </div>
                  <div class="col">         
                    <input type="time" name="source_time" class="form-control" required="">
                  </div>
                </div>
        
        
                <div class="form-row mb-4">
                <div class="col-md-3 ">
                    <h5 class="form-name mb-0">ARRIVAL</h5>
                  </div>          
                  <div class="col">
                    <input type="date" name="dest_date" class="form-control" required="">
                  </div>
                  <div class="col">
                    <input type="time" name="dest_time" class="form-control" required="">
                  </div>
                </div>
        
                <div class="form-row mb-4">
                  <div class="col">                
                    <select class="mt-4" name="dep_city" style="border: 0px; border-bottom: 
                      2px solid #5c5c5c; background-color: whitesmoke !important;
                      font-weight: bold !important;
                      width:80%">
                      <option selected="">From</option>
                      <?php
                        
                          $city = "select * from cities";
                          $city_data = mysqli_query($conn , $city);

                          while ($row = mysqli_fetch_array($city_data)){
                              echo '<option value='. $row['cities']  .'>'. 
                              $row['cities'] .'</option>';
                        }
                        ?>
                     </select>             
                  </div>
                  <div class="col">
                      <select class="mt-4" name="arr_city" style="border: 0px; border-bottom: 
                        2px solid #5c5c5c; background-color: whitesmoke !important;
                        font-weight: bold !important;
                        width:80%">
                        <option selected="">To</option>
                        <?php
                        
                          $city = "select * from cities";
                          $city_data = mysqli_query($conn , $city);

                          while ($row = mysqli_fetch_array($city_data)){
                              echo '<option value='. $row['cities']  .'>'. 
                              $row['cities'] .'</option>';
                        }
                        ?>
                       </select>                
                  </div>
                </div>
        
                <div class="form-row">
                  <div class="col">
                    <div class="input-group">
                        <label for="dura">Duration</label>
                        <input type="text" name="dura" id="dura" required="">
                      </div>              
                    </div>            
                  <div class="col">
                    <div class="input-group">
                        <label for="price">Price</label>
                        <input type="number" style="border: 0px; border-bottom: 2px solid #5c5c5c;" name="price" id="price" required="">
                      </div>            
                  </div>
                  <select class="airline col-md-3 mt-4" name="airline_name" style="border: 0px; border-bottom: 
                    2px solid #5c5c5c; background-color: whitesmoke !important;">
                    <option selected="">Select Airline</option>
                    <?php
                        
                        $airline = "select * from airline_data";
                        $airline_data = mysqli_query($conn , $airline);

                        while ($row = mysqli_fetch_array($airline_data)){
                            echo '<option value='. $row['name']  .'>'. 
                            $row['name'] .'</option>';
                        }
                    ?>
                   </select> 


                  </div>              
        
                <button name="flight_but" type="submit" class="btn btn-success mt-5">
                  <div style="font-size: 1.5rem;">
                  <i class="fa fa-lg fa-arrow-right" aria-hidden="true"></i> Proceed
                  </div>
                </button>
              </form>
            </div>
            </div>
        </div>
        </main>

        <?php
            if(isset($_POST['flight_but'])){
              $admin_id = "1";
              $source_date = $_POST['source_date'];
              $dest_date = $_POST['dest_date'];
              $source_time = $_POST['source_time'];
              $dest_time = $_POST['dest_time'];
              $dep_city = $_POST['dep_city'];
              $arr_city = $_POST['arr_city'];
              $dura = $_POST['dura'];
              $price = $_POST['price'];
              $airline_name = $_POST['airline_name'];
              echo $airline_name;
              


              

              $str = "insert into flight_data (admin_id , start_date , end_date , start_time , end_time , 
              place_to , place_from , duration , prize , airline) values ( '$admin_id', '$source_date' , 
              '$dest_date', '$source_time' ,'$dest_time' ,'$arr_city' , '$dep_city' ,'$dura' , '$price' ,
              '$airline_name')";



              $res = mysqli_query($conn , $str);

              if($res){
                  echo "insertd done";
              }

            }
        ?>
</body>
</html>