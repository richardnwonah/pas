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
                    header('location:../admin/index.php');
                 }
                    else{
                        header("location:viewPass.php?id=$row->username");
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
    <link rel="stylesheet" href="../style/style.css"/>
    <title>Admin Login</title>
</head>
<body>
    
<div id="header">
    <h1>Wellspring University</h1>
    <p>Online PAS Allocation System</p>
</div>

<div class="Form">
        <h2>Admin Login</h2>
    <form action="" method="POST">   
        <input name="username" placeholder="User Name"/>
        <input name="pass" placeholder="Password" type="password"/>
        <input type="submit" name="submit" value="submit"/>
    </form> 
</div> 
    
<div id='footer'>
    <marquee>Developed by Rephael Leesi Mitee CNAS/17086</marquee>
<div>
</body>
</html>