<?php
//db linkage
    require "../includes/connection.inc.php";
    if(isset($_POST['submit']))
    {
        $date = $_POST['date'];
        $reason = $_POST['reason']; 
        $student_id = $_GET['id'];

        $sql = "INSERT INTO pass(id ,date, reason, student_id) VALUES ('$student_id', '$date', '$reason', '$student_id')";
        $con->query($sql);
        echo "Pass Request successful";

        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css"/>
    <title>Student Request Pass</title>
</head>
<body>
    
<div id="header">
    <h1>Wellspring University</h1>
    <p>Online PAS Allocation System</p>
</div>


<div class="Form">
        <h2>Student Login</h2>
    <form action="" method="Post">
        <input name="date" type="date">
        <textarea name="reason" placeholder="Enter Reason For Pass"style="width: 70%; height: 80px;"></textarea>
        <input type="submit" name="submit" value="Request Pass"/>
    </form>
    </div> 

    
<div id='footer'>
    <marquee>Developed by Rephael Leesi Mitee CNAS/17086</marquee>
<div>
</body>
</html>