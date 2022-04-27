<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <style>
        <?php include("css/users.css") ?>
    </style>
    <script>
        <?php include("js/app.js") ?>
    </script>
</head>
<body>
<div class="modal editModal" id="editModal">
    <!-- <button class="closeButton">&times;</button> -->
    <h2>Add new user.</h2>
      <form class="modalForm" autocomplete="off" onsubmit="return validate()" action="insert.php" method="POST">
        <div class="modalRow">
          <label>First Name: </label>
          <input type="text" name="firstName" class="modalInput">
        </div>
        <div class="modalRow">
          <label>Last Name: </label>
          <input type="text" name="lastName" class="modalInput">
        </div>
        <div class="modalRow">
          <label>Phone Number: </label>
          <input type="text" name="phoneNumber" class="modalInput">
        </div>
        <div class="modalRow">
          <label>Gender: </label>
          <input type="text" name="gender" class="modalInput">
        </div>
        <div class="modalRow">
          <label>Password: </label>
          <input type="text" name="password" class="modalInput">
        </div>
        <div class="modalRow">
          <label>Email: </label>
          <input type="email" name="emailAddress" class="modalInput">
        </div>
        <div class="modalRow">
          <button class="modalButton" id="o" type="sumbit">Add</button>
          <button class="modalButton" id="c">Close</button>
        </div>
      </form>
  </div>  
  <div class="overlay"></div>
</body>
</html>