<?php

require '../includes/connection.inc.php';

session_start();

if(isset($_POST['username']) && isset($_POST['pass']))
{
    $user = $_POST['username'];
    $password = $_POST['pass'];

    $sql = "SELECT * FROM officials WHERE username='$user'";
    $result = $con->query($sql);
    $row = $result->fetch_object();

    if($row != null)
    { 
        $pass = $row->password;
    
        if (!password_verify($_POST['pass'], $pass)) {
                $_SESSION['username'] = $row->username;
                
                 if($_SESSION['username'] == 'admin')
                 {
                    header('location:admin/select.php');
                 }
                    else{
                        header("location:approvePass.php?id=$row->username");
                    }
        }
        else{
            echo 'UserName or password error';
        }
    }
    else{
        echo 'No such school official';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">   
        <input name="username" placeholder="User Name"/>
        <input name="pass" placeholder="Password"/>
        <input type="submit" name="submit" value="submit"/>
    </form>     
</body>
</html>