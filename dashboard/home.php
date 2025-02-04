<!DOCTYPE html>
<html lang="en">

<head>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Dormitory Management System</title>
     <link rel="shortcut icon" href="https://juniv.edu/images/favicon.ico">
  
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

 

     <style>
          body {
               margin: 0;
          }


        
          .slidebar {

               border: 20px;
               width: 15%;
               height: 700px;
               position: absolute;
            
               background-color: #E0FFFF;
          }

          .slidebar header {
               padding: 30px 10px;
               text-align: center;
               font-family: 'Mochiy Pop P One', sans-serif;
               font-size: 30px;
               font-weight: bolder;
               color: rgb(16, 95, 98);
          }

          .slidebar header span {
               font-size: 50px;
               color: rgb(89, 161, 87);
          }

     

          .slidebar ul li {

               list-style: none;
               padding: 10px;
               font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
               font-weight: bolder;

          }

          .slidebar ul li:hover {
               transform: scale(1.1);
               transition: .5s;
               border-radius: 10px;
               background-color: rgb(89, 150, 152);
               margin-right: 20px;
          }

          .slidebar ul li a {
               text-decoration: none;
          }

        
          .mainpart {
           
               background-image: url(../images/images.jpg);
               width: 85%;
               height: 720px;
               float: right;
               position: relative;
               background-size: cover;
          }

          .infocard {
               margin: 30px;
               margin-top: 20px;
               width: 80%;
               height: 585px;
               position: fixed;
               text-align: center;



          }

          .cardspecific {

            
               position: relative;
               float: left;
               font-size: 30px;
               width: 200px;
               height: 150px;
               margin: 20px;
               font-family: 'Mochiy Pop P One', sans-serif;
               font-weight: bolder;
               color: rgb(9, 9, 84);
               font-size: 20px;
               border: green;
               background: lightcyan;
               border-radius: 0 35% 0 35%;
          }

          .cardspecific:hover {
               transform: scale(1.1);
               background: rgba(108, 154, 117, 0.813);
               transition: 1s;


          }

          .number {
               font-size: 25px;
               padding-top: 40px;
               color: rgb(85, 12, 99);
          }


         


          .log h3 {
               position: fixed;
               top: 5px;
               right: 5%;
               border: black solid;
               padding: 10px;
               border-radius: 20px;
               font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
               font-weight: bolder;
          }

          .log h3 a {
               text-decoration: none;
               color: black;
          }

          .log h3:hover {
               transition: .5s;
               transform: scale(1.1);
               background: blue;

          }

          #hall {
               font-size: 45px;
               color: blue;
          
          }
     </style>


</head>

<body>






    

     <div class="slidebar">
          <header>
               <span>
                    <i class="fas fa-users-cog"></i><br>
               </span>
               ADMIN
          </header>

          <ul>
               <li>
                    <a href="../Hall/DispHall.php" style="text-decoration:none"><i class="fas fa-building"></i> Yurtlar </a>
               </li>
               <li>
                    <a href="../Student/DispStudent.php" style="text-decoration:none"><i class="fas fa-book-reader"></i> Ogrenciler</a>
               </li>
               <li>
                    <a href="../Staff/DispStaff.php" style="text-decoration:none"><i class="fas fa-users"></i> Calisanlar</a>
               </li>
               <li>
                    <a href="../message/disp.php" style="text-decoration:none"><i class="fas fa-envelope-open"></i> Mesajlar</a>
               </li>
          </ul>

         
          <div>
               <style>
                    .logout {
                         text-align: center;
                         margin-top: 10px;
                         font-family: 'Mochiy Pop P One', sans-serif;
                         font-weight: bolder;
                    }

                    .logout:hover {
                         transform: scale(1.2);
                         color: red;
                         transition: 1s;
                    }
               </style>
               <a style="text-decoration: none;" href="../index.php">
                    <div class="logout">
                         Cikis

                    </div>
               </a>
          </div>

     </div>

    

     <div class="mainpart">

          <div class="infocard">
               <h1 id="hall">KIBRIS YURDUM</h1>

               <a href="../Hall/DispHall.php" rel="" style="text-decoration:none">
                    <div class="cardspecific" style="width: 26%;">
                         Yurtlar
                         <div class="number">
                              <?php
                              include 'connection.php';
                              $sql = "select count(*) as total from hall";
                              $result = mysqli_query($conn, $sql);
                              $data = mysqli_fetch_assoc($result);
                              echo $data['total'];
                              ?>
                         </div>

                    </div>
               </a>

               <a href="../Student/DispStudent.php" rel="" style="text-decoration:none">
                    <div class="cardspecific" style="width: 26%;">
                         Ogrenciler

                         <div class="number">
                              <?php
                              include 'connection.php';
                              $sql = "select count(*) as total from student";
                              $result = mysqli_query($conn, $sql);
                              $data = mysqli_fetch_assoc($result);
                              echo $data['total'];
                              ?>
                         </div>
                    </div>
               </a>

               <a href="../Staff/DispStaff.php" rel="" style="text-decoration:none">
                    <div class="cardspecific" style="width: 26%;">
                         Calisanlar

                         <div class="number">
                              <?php
                              include 'connection.php';
                              $sql = "select count(*) as total from staff";
                              $result = mysqli_query($conn, $sql);
                              $data = mysqli_fetch_assoc($result);
                              echo $data['total'];
                              ?>
                         </div>
                    </div>
               </a>

               <a href="../message/disp.php" rel="" style="text-decoration:none">
                    <div class="cardspecific" style="width: 18%;">
                         Mesajlar

                         <div class="number">
                              <?php
                              include 'connection.php';
                              $sql = "select count(*) as total from message_table";
                              $result = mysqli_query($conn, $sql);
                              $data = mysqli_fetch_assoc($result);
                              echo $data['total'];
                              ?>
                         </div>
                    </div>
               </a>

          </div>

     </div>

</body>

</html>