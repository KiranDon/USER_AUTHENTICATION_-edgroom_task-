<?php
include ('config.php');
// get email....
$url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
// echo $url;  
$url_components = parse_url($url);
parse_str($url_components['query'], $parameters);
$email = $parameters['email'];

$deleteUser = mysqli_query($connection, "delete from users where emailAddress='$email'");
if(isset($deleteUser)){
  echo '<script language="javascript">';
  echo 'alert("Successfully deleted");';
  echo '</script>';
  echo("yayyyy...");
  header("Location:users.php");
}else{
  echo $deleteUser->error;
  echo("Faaaaaaaaaaak");
  echo '<script language="javascript">';
  echo 'alert("Something is wrong...");';
  echo '</script>';
}
?>