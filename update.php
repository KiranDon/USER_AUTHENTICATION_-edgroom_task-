<?php
include ('config.php');

$firstName = $_POST['firstName']; 
$lastName = $_POST['lastName']; 
$phoneNumber = $_POST['phoneNumber']; 
$emailAddress = $_POST['emailAddress']; 
$gender = $_POST['gender']; 
$password = $_POST['password'];
echo $firstName;
// get email....
// $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
// // echo $url;  
// $url_components = parse_url($url);
// parse_str($url_components['query'], $parameters);
// $email = $parameters['email'];

$updateUser = mysqli_query($connection, "update users set firstName='$firstName', lastName='$lastName', phoneNumber='$phoneNumber', gender='$gender', password='$password' where emailAddress='$emailAddress'");
if(isset($updateUser)){
  echo '<script language="javascript">';
  echo 'if(confirm("Details updated successfully...")==true){';
  echo 'location.href="users.php";}';
  echo '</script>';
}else{
  echo '<script language="javascript">';
  echo 'if(confirm("something is wrong...")==true){';
  echo 'location.href="users.php";}';
  echo '</script>';
}
?>