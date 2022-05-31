
<?php 


session_start();
$_SESSION['user'] = $_POST["email"];
 $servername = "sdb-b.hosting.stackcp.net";
 $username = "users5162323-313639cce2";
 $password = "Ter@1baapaaya";

 // Create connection
 $conn = mysqli_connect($servername, $username, $password, $username);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
 } 

echo "<canvas id='c'></canvas>";

 



 

      
  //      if($_POST["email"]!= "" ){
 
  //        mysqli_query($conn,$query);
 
  //        $em= $_POST["email"];
  //        $pass= $_POST["p"];
  //        // echo $em;
  //        // echo $pass;
  //        $query = "SELECT `email` FROM `users` WHERE email = '".mysqli_real_escape_string($conn,$em)."' ";
  //        // echo $query;
  //        if($result= mysqli_query($conn, $query)){
 
  //          $row=mysqli_fetch_array($result);
  //          if($em != $row["email"] ){
            
  //            $query = "INSERT INTO `users` (`email`,`password`) VALUES ('$em','$pass') ";
    
  //          if(mysqli_query($conn, $query)){
 
  //            echo '<a href="write.php" " ></a>';
  //          }else{
  //            echo "failed";
  //          }
  //          }
  //          else if($em == $row["email"]) {
  //            echo "<div class='err text-light justify-content-center'>User already exists!!</div>";
            
                              
             
  //          }
           
  //        }
   
  //  }
 
//   if($_POST["email"]!= "" ){
 
//     mysqli_query($conn,$query);

//     $em= $_POST["email"];
//     $pass= $_POST["p"];
    
//     $query = "SELECT `email` FROM `users` WHERE email = '".mysqli_real_escape_string($conn,$em)."' ";
    
//     if($result= mysqli_query($conn, $query)){

//       $row=mysqli_fetch_array($result);
//       if($em != $row["email"] ){
//         echo "<div id='demo' class='alert alert-danger  ' role='alert'><span class='d-flex justify-content-center'>Email id or password is invalid!!</span></div>";
   
//       }
//       else if($em == $row["email"]) {
//         echo "<script> location.href='https://www.geeksforgeeks.org/'; </script>";
//         exit;
                         
        
//       }
      
//     }
  
// }
      
//   if($_POST["email"]!= "" ){

//    mysqli_query($conn,$query);

//    $em= $_POST["email"];
//    $pass= $_POST["p"];
//    // echo $em;
//    // echo $pass;
//    $query = "SELECT `email` FROM `users` WHERE email = '".mysqli_real_escape_string($conn,$em)."' ";
//    // echo $query;
//    if($result= mysqli_query($conn, $query)){

//      $row=mysqli_fetch_array($result);
//      if($em != $row["email"] ){
      
//              $query = "INSERT INTO `users` (`email`,`password`) VALUES ('$em','$pass') ";
//              echo "<script> location.href='https://www.geeksforgeeks.org/'; </script>";
//             exit;
//             //  echo "<div id='demo'></div>";
//             //  echo "success";
//             // echo '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';
//             // echo "<script>$('#errormessage').html('User already exists!! Sign in');</script>";
   
//           //  if(mysqli_query($conn, $query)){

//           //    // echo  '<script type="text/JavaScript"> 
//           //    // window.location.href = "https://www.geeksforgeeks.org/";
//           //    // </script>';
           
           
//           //  }else{
//           //    echo "failed";
//           //  }
//      }
//      else if($em == $row["email"]) {
//           //  echo "User already exists!! Sign in";
          
//            echo "<div id='demo' class='alert alert-danger  ' role='alert'><span class='d-flex justify-content-center'>User already exists!!</span> <span class='d-flex justify-content-center'>Sign in</span></div>";
                        
       
//        }
     
//    }

// }

 ?>








<!doctype html>
<html lang="en">
  <head>
  <!-- <canvas id='c'></canvas> -->

    <script type="text/javascript" src="jquery.min.js"></script>
        <script src="jquery-ui/jquery-ui.js"></script>
        <link href="jquery-ui/jquery-ui.css" rel="stylesheet">
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.7/js/tether.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" ></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <title>Diary</title>


    <style>
        .mt{
          position: relative;
            top:150px;
    
        }

        html,
        body {
          height: 100%;
        }
        canvas {
          height: 100%;
          width: 100%;
          
          position: absolute;
        }

        .btn{

        }

        .btn:hover{

            animation: pulsate 1s
            ease-in-out;
            
        }

        @keyframes pulsate {
            0%{
                box-shadow: 
                0 0 25px #09b9ff,
                0 0 60px #0a59eb;
            }
        }

        .lead{
            font-size: 15px;
        }


        #demo{
          width: 200px;
          position: relative;
          top:110;
          margin-left:auto;
          margin-right:auto;
         
         

        }
    </style>
    
  </head>

  
  <body >
    <canvas id='c'></canvas>
    
    <div class="container err">



      <?php
    if($_POST["email"]!= "" ){

mysqli_query($conn,$query);

$em= $_POST["email"];
$pass= $_POST["p"];
// echo $em;
// echo $pass;
// $query = "SELECT `email` FROM `users` WHERE email = '".mysqli_real_escape_string($conn,$em)."' ";
$query = "SELECT * FROM `users` WHERE email = '".mysqli_real_escape_string($conn,$em)."' ";
// echo $query;
if($result= mysqli_query($conn, $query)){

  $row=mysqli_fetch_array($result);
  if($em != $row["email"] || $pass!= $row["password"]){
   
        //   $query = "INSERT INTO `users` (`email`,`password`) VALUES ('$em','$pass') ";
        //   echo "<script> location.href='https://www.geeksforgeeks.org/'; </script>";
        //  exit;
         echo "<div id='demo' class='alert alert-danger  user-select-none' role='alert'><span class='d-flex justify-content-center'>Incorrect email id </span> <span class='d-flex justify-content-center'>or password!!</span></div>";
         
  }
  else if($em == $row["email"] && $pass = $row["password"]) {
        echo "<script> location.href='https://www.geeksforgeeks.org/'; </script>";
        exit;
       
        //  echo "<div id='demo' class='alert alert-danger  ' role='alert'><span class='d-flex justify-content-center'>User doesn't exists!!</span> <span class='d-flex justify-content-center'>Sign up</span></div>";
                     
    
    }
  
}

}?>

      </div>
    <div class=" container mt err">
        <div class="jumbotron ">
          <h1 class="display-3 f-1 d-flex justify-content-center font-weight-bold text-light user-select-none">Secret Diary</h1>
          <p class="lead f-1 d-flex justify-content-center text-light user-select-none">Store your thoughts permanently and securely.</p>
          <p class="f-1 d-flex justify-content-center text-light user-select-none" id="su" >Sign in with your email id and password!</p>
        </div>
        <center>
          <form method="post" >
            <div class="form-group row col-md-5">

                <div class="col-lg-3-5   ">
                    <input class="form-control user-select-none" name="email" id="ex1" type="text" placeholder="Your Email" required>
                  </div>
                  <br>
                <div class="col-lg-3-5  ">
                    <input type="password " id="password" class="form-control mt-3 user-select-none" name="p" placeholder="Password" required>
                </div>
            </div>
        </center>
            <div class="d-flex justify-content-center">
                <div class="form-check form-switch mt-3 mb-1">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" >
                    <label class="form-check-label  text-light user-select-none" for="flexSwitchCheckDefault">Stay logged in</label>
                  </div>
                </div>
                <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary mt-3 mb-3 user-select-none" id="submitbutton" >Submit</button>
              
                </div>
                <div class="d-flex justify-content-center">
              <div class="text-light p-4 user-select-none" id="si">Sign up</a></div>
                </div>

                <!-- <div id="errormessage">hii</div> -->
               
</div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      

        <script src="bolt.js"></script>
        <script>
 

          document.getElementById("si").onclick = function(){
          
            location.href='https://ninjaweb516-com.stackstaging.com/7-mysql/diarysignup.php';
        //   document.getElementById("su").innerHTML="Sign in with your email id and password";
         
            <?php

// if($_POST["email"]!= "" ){

//        mysqli_query($conn,$query);
    
//        $em= $_POST["email"];
//        $pass= $_POST["p"];
//        // echo $em;
//        // echo $pass;
//        $query = "SELECT `email` FROM `users` WHERE email = '".mysqli_real_escape_string($conn,$em)."' ";
//        // echo $query;
//        if($result= mysqli_query($conn, $query)){
    
//          $row=mysqli_fetch_array($result);
//          if($em != $row["email"] ){
          
//                  $query = "INSERT INTO `users` (`email`,`password`) VALUES ('$em','$pass') ";
//                  echo "<script> location.href='https://www.geeksforgeeks.org/'; </script>";
//                 exit;
               
//          }
//          else if($em == $row["email"]) {
//               //  echo "User already exists!! Sign in";
              
//                echo "<div id='demo' class='alert alert-danger  ' role='alert'><span class='d-flex justify-content-center'>User already exists!!</span> <span class='d-flex justify-content-center'>Sign in</span></div>";
                            
           
//            }
         
//        }
    
//     }
        //        if($_POST["email"]!= "" ){
 
        //         mysqli_query($conn,$query);
        
        //         $em= $_POST["email"];
        //         $pass= $_POST["p"];
                
        //         $query = "SELECT `email` FROM `users` WHERE email = '".mysqli_real_escape_string($conn,$em)."' ";
                
        //         if($result= mysqli_query($conn, $query)){
        
        //           $row=mysqli_fetch_array($result);
        //           if($em != $row["email"] ){
        //             echo "<div id='demo' class='alert alert-danger  ' role='alert'><span class='d-flex justify-content-center'>Email id or password is invalid!!</span></div>";
               
        //           }
        //           else if($em == $row["email"]) {
        //             echo "<script> location.href='https://www.geeksforgeeks.org/'; </script>";
        //             exit;
                                     
                    
        //           }
                  
        //         }
              
        //   }
         

            ?>}
             

        </script>

 
  </body>
</html>