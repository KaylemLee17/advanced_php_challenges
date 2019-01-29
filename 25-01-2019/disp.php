<?php

    include_once 'conn.php';

    $sql = "SELECT * FROM film";
    $result = mysqli_query($conn, $sql);
    // $assoc = mysqli_fetch_assoc($sql);

    if (mysqli_num_rows($result) > 0) {
        $display = mysqli_fetch_assoc($result);
        echo "<br> Title: " . $display["title"];
        echo "<br> Director: " . $display ["director"];
        echo "<br> Year: " . $display["year"];
    }
        else {
            echo "No results found.";
        }

    mysqli_close($conn);
?>