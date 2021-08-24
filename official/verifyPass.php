<?php


require '../includes/officialAuth.inc.php';
require '../includes/connection.inc.php';

    $realAdmin;
    $id = $_GET["id"];
    $realAdmin = $_SESSION['username'];

    if($realAdmin == 'cso')
    {
        $admin = 'csoVerification';
    }
    echo $id;
    echo $admin;
    $sql = "UPDATE pass SET $admin=1 WHERE student_id = $id";
    $con->query($sql);
    echo $con->error;

    header('location: verifyPass.php');


?>