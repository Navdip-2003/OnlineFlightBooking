<?php include 'header.php' ;
  require '../conn.php';
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <style>
    td {
       
        font-size: 18px !important;
    }

    p {
        font-size: 35px;
        font-weight: 100;
        font-family: 'product sans';
    }

    .main-section {
        width: 100%;
        margin: 0 auto;
        text-align: center;
        padding: 0px 5px;
    }

    .dashbord {
        width: 23%;
        display: inline-block;
        background-color: #34495E;
        color: #fff;
        margin-top: 50px;
    }

    .icon-section i {
        font-size: 30px;
        padding: 10px;
        border: 1px solid #fff;
        border-radius: 50%;
        margin-top: -25px;
        margin-bottom: 10px;
        background-color: #34495E;
    }

    .icon-section p {
        margin: 0px;
        font-size: 20px;
        padding-bottom: 10px;
    }

    .detail-section {
        background-color: #2F4254;
        padding: 5px 0px;
    }

    .dashbord .detail-section:hover {
        background-color: #5a5a5a;
        cursor: pointer;
    }

    .detail-section a {
        color: #fff;
        text-decoration: none;
    }

    .dashbord-green .icon-section,
    .dashbord-green .icon-section i {
        background-color: #16A085;
    }

    .dashbord-green .detail-section {
        background-color: #149077;
    }

    .dashbord-blue .icon-section,
    .dashbord-blue .icon-section i {
        background-color: #2980B9;
    }

    .dashbord-blue .detail-section {
        background-color: #2573A6;
    }

    .dashbord-red .icon-section,
    .dashbord-red .icon-section i {
        background-color: #E74C3C;
    }

    .dashbord-red .detail-section {
        background-color: #CF4436;
    }

    .table .thead-dark th {
        padding: 10px 0px;
    }

    .userdata label {
        font-size: 25px;
        margin-left: 15px;
        font-weight: bold;
    }

    .userdata {
        padding-bottom: 30px;
    }

    .table .thead-dark th {
        padding-left: 10px;
    }

    .mt-4 {
        margin-top: 6.5rem !important;
    }

    .btn1 {
        border-radius: 7px;
        margin-left: 50px;
        font-weight: bold;
        background-color: #343a40;
        color: azure;
    }

    .search {
        border-radius: 5px;
    }

    footer {
       
        bottom: 0;
        width: 100%;
        height: 2.5rem;
       
    }

    .footer-w3l {
        margin: 50px 0 15px 0;
    }

    .footer-w3l p {
        font-size: 14px;
        text-align: center;
        color: #000;
        line-height: 27px;
    }

    .footer-w3l p a {
        color: #000;
    }

    .footer-w3l p a:hover {
        text-decoration: underline;
    }

    .footer {
        margin-top: 150px;
        background-color: #343a40;
    }
    </style>


</head>

<body>

    <br>

    <main>
        <div class="container">

            <div class="main-section">
                <div class="dashbord">
                    <div class="icon-section">
                        <?php
           $str = "select count(*) as tp from user_data";
           $res = mysqli_query($conn, $str);
           $total_pas = mysqli_fetch_assoc($res);

          ?>
                        <i class="bi bi-people-fill" aria-hidden="true"></i><br>
                        Total Passengers
                        <p><?php echo $total_pas['tp']; ?></p>
                    </div>

                </div>
                <div class="dashbord dashbord-green">
                    <div class="icon-section">
                        <?php
           $str = "select SUM(prize) as total_prize  from book_flight";
           $res = mysqli_query($conn, $str);
           $total_prize = mysqli_fetch_assoc($res);

          ?>
                        <i class="bi bi-cash-coin" aria-hidden="true"></i><br>
                        Amount
                        <p><?php echo $total_prize['total_prize']; ?></p>
                    </div>

                </div>
                <div class="dashbord dashbord-red">
                    <div class="icon-section">
                        <?php
           $str = "select count(*) as tf from flight_data";
           $res = mysqli_query($conn, $str);
           $total_flight = mysqli_fetch_assoc($res);
          ?>
                        <i class="bi bi-airplane" aria-hidden="true"></i><br>
                        Flights
                        <p><?php echo $total_flight['tf']; ?></p>
                    </div>

                </div>

                <div class="dashbord dashbord-blue">
                    <div class="icon-section">
                        <?php
           $str = "select count(*) as ta from airline_data";
           $res = mysqli_query($conn, $str);
           $total_airline = mysqli_fetch_assoc($res);
          ?>
                        <i class="bi bi-airplane bi-rotate-180" aria-hidden="true"></i><br>
                        Available Airlines
                        <p><?php echo $total_airline['ta']; ?></p>
                    </div>

                </div>

            </div>

        </div>

        <div class="card mt-4" id="flight">
            <div class="card-body">
               
                <p class="text-secondary">Today's Flights</p>
                <table class="table-sm table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">user_id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Password</th>
                            <th scope="col">Delete</th>

                        </tr>


                    </thead>
                    <?php
                    $str = "select * from user_data";
                    $res = mysqli_query($conn , $str);
                    while($row = mysqli_fetch_array($res)){

                    
                    echo '

                    <tbody>
                        <tr>

                            <td>'.$row[0].'</td>
                            <td>'.$row[1].'</td>
                            <td>'.$row[2].'</td>
                            <td>'.$row[3].'</td>
                            <td>
                                <form action="delete_user.php?user_id='.$row[0].'" method="post">
                                    <input name="flight_id" type="hidden" value="1">
                                    <a href="delete_user.php?user_id='.$row[0].'"> 
                                        <button class="btn" type="submit" name="del_flight">
                                        <i class="text-danger fa fa-trash" aria-hidden="true"></i></button>
                                    </a>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                    ';
                  }
                    
                    ?>
                </table>
            </div>
        </div>


        <div class="card mt-4" id="flight">
            <div class="card-body container-fuil">
              
                <p class="text-secondary">Book Flight Information </p>
                <form method=POST>

                    <div class="userdata">
                        <label for="">Enter User_id :</label>
                        <input type="number" name="user_id" class="search">
                        <button class="btn1" name="show_data">Show Data</button>
                    </div>
                </form>


                <table class="table-sm table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Book_id</th>
                            <th scope="col">Flight_id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Form</th>
                            <th scope="col">To</th>
                            <th scope="col">Departure</th>
                            <th scope="col">Arrivale</th>
                            <th scope="col">Seats</th>
                            <th scope="col">Prize</th>
                            <th scope="col">Class</th>
                            <th scope="col">Delete</th>


                        </tr>


                    </thead>
                    <?php
                    if(isset($_POST['show_data'])){
                      $user_id= $_POST['user_id'];
                      $str = "select * from book_flight where user_id = '$user_id'";
                      $res = mysqli_query($conn , $str);
                      while( $row = mysqli_fetch_assoc($res)){
                     

                      echo '
                      <tbody>
                            <tr>
                                <td>'.$row['book_id'].'</td>
                                <td>'.$row['flight_id'].'</td>
                                <td>'.$row['user_name'].'</td>
                                <td>'.$row['place_from'].'</td>
                                <td>'.$row['place_to'].'</td>
                                <td>'.$row['start_date'].'</td>
                                <td>'.$row['end_date'].'</td>
                                <td>'.$row['seat'].'</td>
                                <td>'.$row['prize'].'</td>
                                <td>'.$row['class'].'</td>
                                <td>
                                <form action="delete_book.php?book_id='.$row['book_id'].'" method="post">
                                <input name="flight_id" type="hidden" value="1">
                                <a href="delete_user.php?book_id='.$row['book_id'].'"> 
                                    <button class="btn" type="submit" name="del_flight">
                                    <i class="text-danger fa fa-trash" aria-hidden="true"></i></button>
                                </a>
                            </form>
                                </td>
                            </tr>
                      </tbody>
                      ';
                    }
                    }
                ?>

                </table>
            </div>
        </div>



    </main>

    <footer class="mt-5">
        <div class="footer">
            <h5 class="text-light text-center  ">
                <img src="../assets/images/airtic.png" height="40px" width="40px" alt="">
                Online Flight Booking
            </h5>

            <div class="text-light text-center">© 2022 - Developed By Pradeep & Navdeep, Surat
                <br><br></div>

        </div>

    </footer>

    </div>
    

</body>


</html>