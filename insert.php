<?php
include ('config.php');

$firstName = $_POST['firstName']; 
$lastName = $_POST['lastName']; 
$phoneNumber = $_POST['phoneNumber']; 
$emailAddress = $_POST['emailAddress']; 
$gender = $_POST['gender']; 
$password = $_POST['password'];

$insertUser = mysqli_query($connection, "insert into users values('$firstName', '$lastName', '$phoneNumber', '$emailAddress', '$gender', '$password')");
if($insertUser){
  echo '<script language="javascript">';
  echo 'alert("Successfully Registered");';
  echo '</script>';
  echo("yayyyy...");
  header("Location:login.php");
}else{
  echo $insertUser->error;
  echo("Faaaaaaaaaaak");
  echo '<script language="javascript">';
  echo 'alert("Something is wrong...");';
  echo '</script>';
}
?>