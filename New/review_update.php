<?php

$servername = "localhost";
$username = "phpmyadmin";
$password = "PASSWORD";
$dbname = "www_project";

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect($servername, $username, $password, $dbname);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$inputName = mysqli_real_escape_string($link, $_REQUEST['inputName']);
$inputEmail = mysqli_real_escape_string($link, $_REQUEST['inputEmail']);
$question_1 = mysqli_real_escape_string($link, $_REQUEST['question_1']);
$question_2 = mysqli_real_escape_string($link, $_REQUEST['question_2']);
$question_3 = mysqli_real_escape_string($link, $_REQUEST['question_3']);
$question_4 = mysqli_real_escape_string($link, $_REQUEST['question_4']);
 
// Attempt insert query execution

$sql = "INSERT INTO review VALUES('$inputName', '$inputEmail', '$question_1', '$question_2', '$question_3', '$question_4')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);

header("Location: contact.php");
?>

