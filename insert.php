<?php
include ('config.php');

$firstName = $_POST['firstName']; 
$lastName = $_POST['lastName']; 
$phoneNumber = $_POST['phoneNumber']; 
$emailAddress = $_POST['emailAddress']; 
$gender = $_POST['gender']; 
$password = $_POST['password'];


$file = $_FILES['ProfileImage'];
$fileName = $_FILES['ProfileImage']['name'];
$fileExt = explode('.', $fileName);
$fileActualExt = strtolower(end($fileExt));
$imageName = $emailAddress.".".$fileActualExt;
// echo $imageName;

$query = mysqli_query($connection, "select * from users where emailAddress='$emailAddress'");
$user_data = mysqli_fetch_array($query);
if($user_data==null){
  $insertUser = mysqli_query($connection, "insert into users values('$firstName', '$lastName', '$phoneNumber', '$emailAddress', '$gender', '$password', '$imageName')");
  if($insertUser){
    // send mail
    ini_set("SMTP", "smtpout.secureserver.net");//confirm smtp
    $to = $emailAddress;
    $subject = "Registration successful.";
    $message = "Hello!\n\nYou account has been successfully created.\nNow you can login with your credentials:\n\n<h2>Mail: </h2>$emailAddress\n<h2>Password: </h2>$password\n";
    $from = "anotheredgrrom@gmail.com";
    $headers = "From:" . $from."\n";
    $headers .= "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html\n";

    mail($to,$subject,$message,$headers);
    // // mail

        // image upload starts
        $file = $_FILES['ProfileImage'];

        $fileName = $_FILES['ProfileImage']['name'];
        $fileTmpName = $_FILES['ProfileImage']['tmp_name'];
        $fileSize = $_FILES['ProfileImage']['size'];
        $fileError = $_FILES['ProfileImage']['error'];
        $fileType = $_FILES['ProfileImage']['type'];
    
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
    
        $allowed = array('jpg', 'jpeg', 'png', 'pdf');
    
        if(in_array($fileActualExt, $allowed)){
          if($fileError===0){
            if($fileSize < 209715200){
              $fileNameNew = $emailAddress.".".$fileActualExt;
              $imageName = $fileNameNew;
              $fileDestination = 'uploads/'.$fileNameNew;
              move_uploaded_file($fileTmpName, $fileDestination);
    
              // success
              echo '<script language="javascript">';
              echo 'if(confirm("Image uploaded successfully...")==true){';
              // echo 'location.href="register.php";}';
              echo '</script>'; 
    
            }else{
              echo '<script language="javascript">';
              echo 'if(confirm("File Size if too big...")==true){';
              echo 'location.href="register.php";}';
              echo '</script>'; 
            }
          }else{
            echo '<script language="javascript">';
            echo 'if(confirm("There was an error uploading your file...")==true){';
            echo 'location.href="register.php";}';
            echo '</script>'; 
          }
    
        }else{
          echo '<script language="javascript">';
          echo 'if(confirm("You cannot upload files of this type...")==true){';
          echo 'location.href="register.php";}';
          echo '</script>'; 
        }
        // image upload ends

    echo '<script language="javascript">';
    echo 'if(confirm("Registration Successful...")==true){';
    echo 'location.href="login.php";}';
    echo '</script>';
  }else{
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