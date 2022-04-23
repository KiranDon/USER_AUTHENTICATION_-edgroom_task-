<?php
    $server = "localhost";
    $user = "root";
    $password = "K!r@nD0n";
    $db = "UserAuthentication";

    $connection = mysqli_connect($server, $user, $password, $db);

    if($connection){
        echo "Connection successful...";
    }else{
        echo "failed to connect...";
    }
?>