<?php
    include_once('user.php');

    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn) {
        echo "connection failed";
    }
    // }   else {
    //     echo "connected successfully";
    // }

?>