<?php
session_start();
$pass=$_POST["login-password"];
$email = $_POST["login-email"];
$error=0;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// if($_SESSION["logged_in"]==TRUE){
//   header("Location: home.html");
//   exit();
// }

function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
  }

function function_alert($message) {  
    echo "<script>";
    echo "alert(". json_encode($message) . ")";
    echo "</script>"; 
} 
console_log($email);
console_log($pass);
if(is_null($pass)){
	function_alert("password field is empty");
	$error=1;
}
elseif(is_null($email)){
	function_alert("email field is empty");
  console_log($email);
	$error=1;
}
else{
if($error==0){
$user_check_query = "SELECT * FROM login WHERE email='$email' AND password='$pass'";
  $result = mysqli_query($conn, $user_check_query);
  // $user = mysqli_fetch_assoc($result);
  if (mysqli_num_rows($result) == 1) {
      $_SESSION['email'] = $email;
      $_SESSION['success'] = "You are now logged in";
      header('location: home.php');
    }
    else{
      function_alert("Wrong username/password combination");
    }
}
}
?>