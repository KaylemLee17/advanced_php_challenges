<!-- <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body> -->
    <?php
        include_once 'conn.php';

        //query to create table
        $sql = "CREATE TABLE film (
            id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            title VARCHAR(64) NOT NULL,
            director VARCHAR(64) NOT NULL,            
            year INT(4))";

        //accept link to database and query to create table
        if (mysqli_query($conn, $sql)) {
            echo '<br> Table films created successfully. You may now proceed to <a href ="add.php">add</a> data to table';
        }   else {
            echo "<br> ERROR creating table: " . mysqli_error($conn);
        }

        //delete the table manually for testing purposes eg. DROP table publications.film;
    ?>
<!-- </body>
</html> -->