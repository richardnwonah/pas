<?php


require '../includes/officialAuth.inc.php';
require '../includes/connection.inc.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>View Students</title>
</head>
<body>
    <div id="header">
    <h1>Wellspring University</h1>
    <h3>Admin page</h3>
    
</div>

<div id="sideBar">
       <ol>
           <li id="list" style="padding: 7%; color:white;"><a href="addStudent.php">Add Student +</a></li>
           <li id="list"><a href="logOut.php" style="padding: 7%; color:white;">Log out</a></li>
</ol>
</div>
<div id="main">
        <p><b>View Students</b></p><br>
    <?php
    
    $sql = 'SELECT * FROM student';
    $result = $con->query($sql);
    
    if($result != null)
    {
        
        echo "<table>
        <tr>
        <th>student_id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Level</th>
        <th>Matriculation Number</th>
        <th>Registration Number</th>
        <!--<th>Delete</th>--!>
      
        </tr>";
        echo  "<tr>";
    foreach($result as $row)
    { 

        echo "<td>".$row['student_id'];"</td>";
        echo "<td>".$row['firstName'];"</td>";
        echo "<td>".$row['lastName'];"</td>";
        echo "<td>".$row['level'];"</td>";
        echo "<td>".$row['mat_no'];"</td>";
        echo "<td>".$row['reg_no'];"</td>";
      //echo sprintf("<td><a href='deleteStudent.php?id=%s'", $con->real_escape_string($row['mat_no'])); 
     // echo "<button>Delete</button></a></td>";
     echo"  </tr>";

    }  
    
}
else{
    echo 'This row is empty';
}
    ?>
    </table>
</div>
<div id="footer">
    <marquee>Developed by Rephael Leesi Mitee CNAS/17086</marquee>
</div>
</body>
</html>
