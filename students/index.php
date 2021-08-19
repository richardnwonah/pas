<?php

require '../includes/connection.inc.php';
//require '../includes/studentAuth.inc.php';

session_start();

if(isset($_POST['mat_no']) && isset($_POST['reg_no']))
{
    $mat_no = $_POST['mat_no'];
    $reg_no = $_POST['reg_no'];

    $sql = "SELECT * FROM student WHERE mat_no='$mat_no";
    $result = $con->query($sql);
    $row = $result->fetch_all();

    if($row != null)
    { 
        $reg = $row->reg_no;

        if ($reg == $reg_no) {
                $_SESSION['id'] = $row->student_id;
                 header("location:requestPass.php?id=$row->student_id");
                    }
        
        else{
            echo 'Matriculation or Registration number error';
        }
    }
    else{
        echo 'No such student';
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
    <title>Student login</title>
</head>
<body>

<div id="header">
    <h1>Wellspring University</h1>
    <p>Online PAS Allocation System</p>
</div>

    <div class="Form">
        <h2>Student Login</h2>
    <form action="" method="POST">   
        <input name="mat_no" placeholder="Matric Number"/>
        <input name="reg_no" placeholder="Registration Number"/>
        <input type="submit" name="submit" value="submit"/>
    </form> 
</div> 

<div id='footer'>
    <marquee>Developed by Rephael Leesi Mitee CNAS/17086</marquee>
<div>
</body>
</html>