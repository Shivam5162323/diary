<?php

// error_reporting(-1);
// ini_set('display_errors', 'On');
// set_error_handler("var_dump");
    // mysqli_connect("localhost","users5162323-313639cce2","Ter@1baapaaya","users5162323-313639cce2");
// $servername = "sdb-b.hosting.stackcp.net";
// $username = "users5162323-313639cce2";
// $password = "Ter@1baapaaya";

// // Create connection
// $conn = mysqli_connect($servername, $username, $password, $username);

// // Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }


//inserting data 
// $query = "INSERT INTO users (email,password) 
// VALUES ('shivamchaudhary29022004@gmail.com','7017shivam')";


//updating data 
// $query = "UPDATE `users` SET email = 'shivam29@gmail.com' WHERE id=1 LIMIT 1";
// $query = "UPDATE `users` SET password = 'qwert4566' WHERE email='shivam29@gmail.com' LIMIT 1";


// mysqli_query($conn,$query);
// $query = "SELECT * FROM users";

// if($result= mysqli_query($conn, $query)){
//     // echo "Query was sucessful";
//     // $row=mysqli_fetch_array($result);
//     // print_r($row);
//     echo "Your email is ".$row["email"];
//     echo "<br>Your password is ".$row["password"];
// }




















// $servername = "sdb-b.hosting.stackcp.net";
// $username = "users5162323-313639cce2";
// $password = "Ter@1baapaaya";


// $conn = mysqli_connect($servername, $username, $password, $username);


// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }


// mysqli_query($conn,$query);
// // $query = "SELECT * FROM users WHERE id = 3";
// // $query = "SELECT * FROM users WHERE email LIKE '%gmail.com' ";
// // $query = "SELECT * FROM users WHERE email LIKE '%p%' ";
// // $query = "SELECT `password` FROM users WHERE email LIKE '%p%' ";
// $query = "SELECT `password` FROM users WHERE email LIKE '%c%' AND email LIKE  '%2%'";

// if($result= mysqli_query($conn, $query)){
   
//   while($row= mysqli_fetch_array($result)){

//     print_r($row);
//   }
 

// }


































// $servername = "sdb-b.hosting.stackcp.net";
// $username = "users5162323-313639cce2";
// $password = "Ter@1baapaaya";


// $conn = mysqli_connect($servername, $username, $password, $username);


// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }

// mysqli_query($conn,$query);
// $name = "Rob O' grady";


// //this will not do what we want due to presence of ' in name
// // $query = "SELECT * FROM `users` WHERE `name` = $name ";

// //for avoiding ' and "
// $query = "SELECT * FROM `users` WHERE name = '".mysqli_real_escape_string($conn,$name)."' ";



// if($result= mysqli_query($conn, $query)){
   
//   while($row= mysqli_fetch_array($result)){

//     print_r($row);
//   }
 

// }
    











































//sign up form


// $servername = "sdb-b.hosting.stackcp.net";
// $username = "users5162323-313639cce2";
// $password = "Ter@1baapaaya";


// $conn = mysqli_connect($servername, $username, $password, $username);


// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }

// if (!isset($_SESSION)) {
//   session_start();
//   }
  
//   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//   $_SESSION['postdata'] = $_POST;
//   unset($_POST);
//   header("Location: ".$_SERVER[REQUEST_URI]);
//   exit;
//   }
  
//   if (@$_SESSION['postdata']){
//   $_POST=$_SESSION['postdata'];
//   unset($_SESSION['postdata']);
//   }
 
      
// ?>
<!-- 
// <html>

//   <head>

//   </head>

//   <body>


//     <h1>Sign Up</h1>
//     <form method="post">
//         <input type ="email" id="email" name="email" placeholder="email" required>
//         <input type ='password' name='p' placeholder='password' required>
//         <button type ="submit">submit</button>
//         <div id="exist"> -->

      <?php  

 

      
//       if($_POST["email"]!= "" ){

//         mysqli_query($conn,$query);

//         $em= $_POST["email"];
//         $pass= $_POST["p"];
//         // echo $em;
//         // echo $pass;
//         $query = "SELECT `email` FROM `users` WHERE email = '".mysqli_real_escape_string($conn,$em)."' ";
//         // echo $query;
//         if($result= mysqli_query($conn, $query)){

//           $row=mysqli_fetch_array($result);
//           if($em != $row["email"] ){
           
//             $query = "INSERT INTO `users` (`email`,`password`) VALUES ('$em','$pass') ";
   
//           if(mysqli_query($conn, $query)){

//             echo "Sign up sucessful!";
//           }else{
//             echo "failed";
//           }
//           }
//           else if($em == $row["email"]) {
//             echo "<p>User already exists!!</p>";
           
                             
            
//           }
          
//         }
  
//   }
//   ?>
<!-- //   </div>

// </form>

// </body>
// </html> -->

























<?php

// error_reporting(E_ALL);
//    session_start();
  //  echo $_SESSION['username'];
//   session_start();
//   error_reporting(E_ALL);
//   // $_SESSION['abc'] = 'ajsdkla skjld ajsdlkja skld jasl';
//   echo $_SESSION['username'];
//   header('Location: /7-mysql/session.php');
//   exit();
// $servername = "sdb-b.hosting.stackcp.net";
// $username = "users5162323-313639cce2";
// $password = "Ter@1baapaaya";


// $conn = mysqli_connect($servername, $username, $password, $username);


// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }


?>

<!-- <html>

  <head>

  </head>

  <body>


    <h1>Sign Up</h1>
    <form method="post">
        <input type ="email" id="email" name="email" placeholder="email" required>
        <input type ='password' name='p' placeholder='password' required>
        <button type ="submit">submit</button>
        <div id="exist"> -->

      <?php  

 

      
  //     if($_POST["email"]!= "" ){

  //       mysqli_query($conn,$query);

  //       $em= $_POST["email"];
  //       $pass= $_POST["p"];
  //       // echo $em;
  //       // echo $pass;
  //       $query = "SELECT `email` FROM `users` WHERE email = '".mysqli_real_escape_string($conn,$em)."' ";
  //       // echo $query;
  //       if($result= mysqli_query($conn, $query)){

  //         $row=mysqli_fetch_array($result);
  //         if($em != $row["email"] ){
           
  //           $query = "INSERT INTO `users` (`email`,`password`) VALUES ('$em','$pass') ";
   
  //         if(mysqli_query($conn, $query)){
  //           $_SESSION['email'] = "$em";
  //           // echo $_SESSION['email'];
  //           // header("Location: https://ninjaweb516-com.stackstaging.com/7-mysql/session.php");            // echo "Sign up sucessful!";
  //           echo "<script> location.href='https://ninjaweb516-com.stackstaging.com/7-mysql/session.php'; </script>";
  //           exit;
  //         }else{
  //           echo "failed";
  //         }
  //         }
  //         else if($em == $row["email"]) {
  //           echo "<p>User already exists!!</p>";
           
                             
            
  //         }
          
  //       }
  
  // }
  ?>
  <!-- </div>

</form>

</body>
</html> -->



























<!-- cookies-------------------- -->

<?php
  //expire in 1 day
    setcookie("customerId","1234", time()+ 60 * 60 * 24);
    echo $_COOKIE['customerId'];



?>
