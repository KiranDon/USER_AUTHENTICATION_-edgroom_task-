<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <title>Users</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <style>
      <?php include("css/users.css") ?>
    </style>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> -->
</head>
<body>
    <h1>All users</h1>
    <a href="add.php"><button type="button" class="btn btn-primary addUser openModal" id="addUser" data-toggle="modal" data-target="#exampleModalCenter">
    Add User ➕
</button></a>

    <!-- <button class="addUser" id="addUser" >Add User ➕</button> -->

    <input type="text" id="searchInput" placeholder="Search by name">

    <table>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Phone Number</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Password</th>
        <th>Edit</th>
        <th>Delete</th>
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
                  <td><a href="edit.php?email=<?php echo $rows['emailAddress'] ?>"><button class="editButton" id="editButton" name=<?php echo $rows['emailAddress'] ?>>EDIT 🖊</button></a></td>
                  <td><a href="delete.php?email=<?php echo $rows['emailAddress'] ?>"><button class="deleteButton" id="deleteButton" name=<?php echo $rows['emailAddress'] ?>>DELETE ❌</button></a></td>
                  <!-- <td><button class="deleteButton" id="deleteButton" name=<?php echo $rows['emailAddress'] ?>>DELETE ❌</button></td> -->
                    
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

    <!-- add user modal starts here.... -->

  <!-- Modal start -->
  
  <!-- Modal End -->
<!-- add user modal ends here.... -->
    


    
</body>
</html>