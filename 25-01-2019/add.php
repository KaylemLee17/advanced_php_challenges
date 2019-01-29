<?php

    include_once 'conn.php';

    $sql = "INSERT INTO film (title, director, year) VALUES ('Escape from New York', 'John Carpenter', '1981')";

    if (mysqli_query($conn, $sql)) {
        echo '<br> New record for table, film, created successfully. You may now select an entry for <a href="disp.php">display</a>.';
    }   else {
        echo 'Error: ' . mysqli_error($conn);
    }

mysqli_query($conn, $sql);

?>
