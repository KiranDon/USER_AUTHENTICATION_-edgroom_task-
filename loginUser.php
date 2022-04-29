<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <link rel="stylesheet" href="css/profile.css">
</head>
<body>
  
    <!-- <h2>Hello, Usha Kiran!</h2> -->
    <?php
      include("config.php");


      $emailAddress = $_POST['emailAddress'];  
      $password = $_POST['password'];
    //   echo($password);
    //   echo($emailAddress);

      $query = mysqli_query($connection, "select * from users where emailAddress='$emailAddress'");
      if($query){
        //   echo "successfull";
          $user_data = mysqli_fetch_array($query);
          if($user_data==null){
            echo "no user found with given mail.";
          }else if($user_data['password']!=$password){
            echo "invalid password.";
          }else{

        //   echo $user_data['firstName'];
        ?>
        <h1>Profile</h1>
  <div class="profileBox">
    <img src="uploads/<?php echo $emailAddress; ?>.png" alt="Profile Pic">
        <h2>Hello,&nbsp; <?php echo($user_data['firstName']);?><?php echo($user_data['lastName']);?></h2>
        <button class="adminLogin" id="adminButton"><a href="index.php">Logout</a></button></a>
        <?php
          }
      }else{
          echo "no user found with given mail.";
      }
    //   echo count($query)

?>
  </div>
</body>
</html>