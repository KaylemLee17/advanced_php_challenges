<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php
    $name = 'Kaylem-lee';
    $age = 22;
    $foods = array('mac and cheese', 'lasange', 'pizza');

    $string = "Hello my name is $name and my age is $age. Currently, my favourite foods are $foods[0], $foods[1], $foods[2]";

    echo $string;

    $word = 'string';

    echo "The variable called '$myName' is a datatype known as a $word";
?>
</body>
</html>