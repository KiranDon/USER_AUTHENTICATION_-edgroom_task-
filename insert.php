<?php

include ('config.php');

$firstName = $_POST['firstName']; 
$lastName = $_POST['lastName']; 
$phoneNumber = $_POST['phoneNumber']; 
$emailAddress = $_POST['emailAddress']; 
$gender = $_POST['gender']; 
$password = $_POST['password'];
echo($firstName); 
echo($lastName); 
echo($phoneNumber); 
echo($emailAddress); 
echo($gender); 
echo($password); 
// echo '<script type="text/javascript">alert("working")<script>';
$insertUser = mysqli_query($connection, "insert into users values('$firstName', '$lastName', '$phoneNumber', '$emailAddress', '$gender', '$password')");
if($insertUser){
  echo("yayyyy...");
  header("Location:index.php");
}else{
  echo("Faaaaaaaaaaak");
}

?>