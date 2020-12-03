<?php
session_start();
$bookname = $_POST["uname"];
$price = $_POST["pswd"];
$genre = $_POST["genre"];
$type = $_POST["fnf"];
$pic_link = $_POST["link"] ;
$user=$_SESSION["email"];

$servername = "localhost";
$username = "phpmyadmin";
$password = "PASSWORD";
$dbname = "user";

// Create connection
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
  console_log("hello");
if($_REQUEST['sub_book']=='SUBMIT'){
$sql = "insert into  books (seller, bookname, type, genre, pic, price)
values ('$user', '$bookname','$type', '$genre', '$pic_link', '$price')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    header("Location: home.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}
mysqli_close($conn);
?>




