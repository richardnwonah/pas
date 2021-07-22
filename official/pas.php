<?php
include '../includes/connection.inc.php';

if(isset($_POST['submit'])){
 
    $position = $_POST['position'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $hash = password_hash($password, PASSWORD_DEFAULT);
   
    $sql = "INSERT INTO officials(position, username, password) VALUES ('$position', '$username', '$hash')";

    $con->query($sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add</title>
</head>
<body>
    <form action="" Method="POST">
    <input placeholder="position" name="position"/>
    <input placeholder="username" name="username"/>
    <input placeholder="password" name="password"/>
    <input type="submit" value="submit" name="submit"/>
</form>
</body>
</html>