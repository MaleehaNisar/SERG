<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "db_login";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    echo "success";
    // }
    // else{
    die("Error" . mysqli_connect_error());
}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  hello sir 
</body>
</html>