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
  echo 'if(confirm("Registration Successful...")==true){';
  echo 'location.href="login.php";}';
  echo '</script>';
  // echo("yayyyy...");
  // usleep(3000000);
  // header("Location:login.php");
}else{
  // echo $insertUser->error;
  // echo("Faaaaaaaaaaak");
  // echo '<script language="javascript">';
  // echo 'alert("Something is wrong...");';
  // echo '</script>';
  echo '<script language="javascript">';
  echo 'if(confirm("Something is wrong...")==true){';
  echo 'location.href="register.php";}';
  echo '</script>';
}
?>