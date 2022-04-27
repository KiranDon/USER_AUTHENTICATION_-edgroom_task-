<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Details.</title>
    <style>
        <?php include("css/users.css") ?>
    </style>
</head>
<body>

<?php

    include ("config.php");
    $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    // echo $url;  
    $url_components = parse_url($url);
    parse_str($url_components['query'], $parameters);
    $email = $parameters['email'];
    // echo $name;
    $query = mysqli_query($connection, "select * from users where emailAddress='$email'");
    $user_data = mysqli_fetch_array($query);
    // echo $user_data['firstName'];
?>


<div class="modal editModal" id="editModal">
    <!-- <button class="closeButton">&times;</button> -->
    <h2>Edit user details.</h2>
      <form class="modalForm" autocomplete="off" action="update.php" method="POST">
        <div class="modalRow">
          <label>First Name: </label>
          <input type="text" name="firstName" class="modalInput" value=<?php echo $user_data['firstName'] ?>>
        </div>
        <div class="modalRow">
          <label>Last Name: </label>
          <input type="text" name="lastName" class="modalInput" value=<?php echo $user_data['lastName'] ?>>
        </div>
        <div class="modalRow">
          <label>Phone Number: </label>
          <input type="text" name="phoneNumber" class="modalInput" value=<?php echo $user_data['phoneNumber'] ?>>
        </div>
        <div class="modalRow">
          <label>Gender: </label>
          <input type="text" name="gender" class="modalInput" value=<?php echo $user_data['gender'] ?>>
        </div>
        <div class="modalRow">
          <label>Password: </label>
          <input type="text" name="password" class="modalInput" value=<?php echo $user_data['password'] ?>>
        </div>
        <div class="modalRow">
          <label>Email: </label>
          <input type="email" name="emailAddress" class="modalInput" value=<?php echo $user_data['emailAddress'] ?> readonly>
        </div>
        <div class="modalRow">
          <button class="modalButton" id="o" type="sumbit">Save</button>
          <button class="modalButton" id="c">Close</button>
        </div>
      </form>
  </div>  
  <div class="overlay"></div>
    



  <script type="text/javascript">

      document.getElementById("c").addEventListener('click', function(e){
          e.preventDefault();
          location.href = "users.php";
      })
      // script for modal starts here
          const editModal = document.getElementById('editModal');
          const openDeleteModal = document.querySelectorAll('.openDeleteModal');
          const openAddModal = document.querySelectorAll('.openAddModal');
          const modal = document.querySelector('.modal');
          const overlay = document.querySelector('.overlay');
          const closeButton = document.querySelector('.closeButton');
          let editButtons = document.querySelectorAll(".editButton");

          const openModal = function(e){
              e.preventDefault();
              modal.classList.remove('hidden');
              overlay.classList.remove('hidden');
              document.body.style.position = 'fixed';
          }

          const closeModal = function(){
              modal.classList.add('hidden');
              overlay.classList.add('hidden');
              document.body.style.position = '';
          }

          const openEditModal = function(e){
            editModal.classList.remove('hidden');
            overlay.classList.remove('hidden');
            document.body.style.position = 'fixed';
          }
          for(let i=0; i<editButtons.length; i++)
          {
              editButtons[i].addEventListener('click', openEditModal);
          }
          // document.getElementById("editButton").addEventListener("click", function(e){
          //   e.preventDefault();
            
          // })


        //   closeButton.addEventListener('click', closeModal);

        //   overlay.addEventListener('click', closeModal);

        //   document.addEventListener('keydown', function(e){
        //       if(e.keyCode===27 && !modal.classList.contains('hidden'))
        //       {
        //         //   closeModal();
        //       }
        //   });
          // script for modal Ends here
          </script>
</body>
</html>