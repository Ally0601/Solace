<?php
$pass=$_POST["register-password"];
$name = $_POST["name"];
$email = $_POST["register-email"];
$confirm_pass = $_POST["register-password-conf"];
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

if($_SESSION["logged_in"]==TRUE){
  header("Location: home.html");
  exit();
}

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

if(is_null($pass)){
	function_alert("password field is empty");
	$error=1;
}
elseif(is_null($name)){
	function_alert("name field is empty");
	$error=1;
}
elseif(is_null($email)){
	function_alert("email field is empty");
	$error=1;
}
elseif($pass!=$confirm_pass){
  console_log($confirm_pass);
  console_log($pass);
	function_alert("passwords don't match");
	$error=1;
}
else{
if($error==0){
$user_check_query = "SELECT * FROM login WHERE email='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  if ($user) { // if user exists
    if ($user['email'] === $email) {
      function_alert("email already exists");
    	$error=1;
    }
  }
}
  console_log($error);
if($error==1){
  header("Location: login.php"); 
  console_log("1"); 
}
if($error==0){
if($_REQUEST['create_acc']=='REGISTER'){
$sql = "insert into  login (name, password, email)
values ('$name', '$pass','$email')";
if (mysqli_query($conn, $sql)) {
    console_log("New record created successfully");
    $_SESSION["logged_in"] = TRUE;
    $_SESSION["email"]=$email;
    header("Location: home.php"); 
  } else {
    console_log("Error: " . $sql . "<br>" . mysqli_error($conn));
  // header("Location: login.html"); 

  }
}
}
}
?>