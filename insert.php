<?php
include ('config.php');

$firstName = $_POST['firstName']; 
$lastName = $_POST['lastName']; 
$phoneNumber = $_POST['phoneNumber']; 
$emailAddress = $_POST['emailAddress']; 
$gender = $_POST['gender']; 
$password = $_POST['password'];

$query = mysqli_query($connection, "select * from users where emailAddress='$emailAddress'");
$user_data = mysqli_fetch_array($query);
if($user_data==null){
  $insertUser = mysqli_query($connection, "insert into users values('$firstName', '$lastName', '$phoneNumber', '$emailAddress', '$gender', '$password')");
  if($insertUser){

    ini_set("SMTP", "smtpout.secureserver.net");//confirm smtp
    $to = $emailAddress;
    $subject = "Registration successful.";
    $message = "Hello!\n\nYou account has been successfully created.\nNow you can login with your credentials:\n\n<h2>Mail: </h2>$emailAddress\n<h2>Password: </h2>$password\n";
    $from = "anotheredgrrom@gmail.com";
    $headers = "From:" . $from."\n";
    $headers .= "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html\n";

    mail($to,$subject,$message,$headers);
    // mail

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
}else{
  echo '<script language="javascript">';
  echo 'if(confirm("User with given mail id already exixts...\nTry another mail id...")==true){';
  echo 'location.href="register.php";}';
  echo '</script>';
}


?>