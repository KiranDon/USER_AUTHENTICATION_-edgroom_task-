<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Users</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="css/users.css">
</head>
<body>
    <h1>All users</h1>

    <input type="text" id="searchInput" placeholder="Search by name">

    <table>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Phone Number</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Password</th>
      </tr>

      <?php 
                include ("config.php");

                $query = mysqli_query($connection, "select * from users");

                while($rows = mysqli_fetch_assoc($query)){
            ?>

                <tr>
                  <td><?php echo $rows['firstName'] ?></td>
                  <td><?php echo $rows['lastName'] ?></td>
                  <td><?php echo $rows['phoneNumber'] ?></td>
                  <td><?php echo $rows['emailAddress'] ?></td>
                  <td><?php echo $rows['gender'] ?></td>
                  <td><?php echo $rows['password'] ?></td>
                    
                    <!-- <td><a href="profile.php?user=<?php echo $rows['name'] ?>"><button class="button">Profile</button></a></td> -->
                </tr>

            <?php
                }
            ?>


      <!-- <tr>
        <td>Usha Kiran</td>
        <td>Melastri</td>
        <td>9182245303</td>
        <td>ushakiran@gmail.com</td>
        <td>Male</td>
        <td>PassWorD</td>
      </tr> -->

      
    </table>
    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>