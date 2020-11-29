<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    // $conn = mysqli_connect($servername, $username, $password);
    // // Check connection
    // if (!$conn) {
    // die("Connection failed: " . mysqli_connect_error());
    // }
    // function console_log( $data ){
    //     echo '<script>';
    //     echo 'console.log('. json_encode( $data ) .')';
    //     echo '</script>';
    //   }

    // // Create database
    // $sql = "create database user ";
    // if (mysqli_query($conn, $sql)) {
    // console_log("Database created successfully");
    // } else {
    // console_log("Error creating database: " . mysqli_error($conn));
    // }
    $dbname='user';
    $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "create table login(
user INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
  echo "Table login created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

    mysqli_close($conn);
    ?>
