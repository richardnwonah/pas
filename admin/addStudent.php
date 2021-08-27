<?php
require '../includes/officialAuth.inc.php';
include '../includes/connection.inc.php';

if(isset($_POST['submit'])){
 
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $level = $_POST['level'];
    $mat_no = $_POST['mat_no'];
    $reg_no = $_POST['reg_no'];
    $parent_phone = $_POST['parent_phone'];
    $student_phone = $_POST['student_phone'];
    
   
    $sql = "INSERT INTO student(firstName, lastName, level, mat_no, reg_no, parent_phone, student_phone) VALUES ('$firstName', '$lastName', '$level', '$mat_no', '$reg_no', '$parent_phone', '$student_phone')";

    $con->query($sql);
        echo $con->error;
    header('location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="AddStudentStyle.css">
    <title>Add Student</title>
</head>
<body>

    <div id="div">
        <form action="" Method="POST">
            <input placeholder="First Name" name="firstName"/><br><br>
            <input placeholder="Last Name" name="lastName"/><br><br>
            <input placeholder="Level" name="level"/><br><br>
            <input placeholder="Matriculation Number" name="mat_no"/><br><br>
            <input placeholder="Registration Number" name="reg_no"/><br><br>
            <input placeholder="parent phone" name="parent_phone"/><br><br>
            <input placeholder="student phone" name="student_phone"/><br><br>
            <input type="submit" value="submit" name="submit"/>
        </form>
        </div>

    </body>
</html>