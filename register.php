<?php
$password=$_POST["register-password"];
$name = $_POST["name"];
$email = $_POST[""];
$confirm = $_POST["register-password-conf"];
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



function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
  }

function function_alert($message) {  
    echo "<script>alert('$message');</script>"; 
} 

if(empty($password)){
	function_alert("password field is empty");
	$error=1;
}
if(empty($name)){
	function_alert("password field is empty");
	$error=1;
}
if(empty($email)){
	function_alert("password field is empty");
	$error=1
}
if($password!=$confirm){
	function_alert("passwords don't match");
	$error=1
}

if($error==0){
	$user_check_query = "SELECT * FROM login WHERE email='$email' LIMIT 1";
  	$result = mysqli_query($db, $user_check_query);
  	$user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['email'] === $email) {
      function_alert("email already exists");
    	$error=1;
    }
  }
}
if($error==0){
if($_REQUEST['create_acc']=='REGISTER'){
$sql = "insert into  product (productname, productprice, productdescription)
values ('$n2', '$n3','$n4')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}
}
mysqli_close($conn);
?>