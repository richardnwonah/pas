<?php

$id = $_GET["id"];



require '../includes/officialAuth.inc.php';
require '../includes/connection.inc.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/officialStyle.css"/>
    <title>Approve pass</title>
</head>
<body>

<div id="header">
    <h1> <?php echo $_SESSION['username']; ?> verify pass page</h1>
</div>
    <?php
    
    $sql = 'SELECT * FROM pass';
    $result = $con->query($sql);
    
    if($result != null)
    {
        
        echo "<table>
        <tr>
        <th>Date</th>
        <th>Reason</th>
        <th>Student Id</th>
        <th>verify</th>
        </tr>";
    foreach($result as $row)
    { 
        echo  "<tr>";
        echo "<td>".$row['date'];"</td>";
        echo "<td>".$row['reason'];"</td>";
        echo "<td>".$row['student_id'];"</td>"; 
        echo sprintf("<td><a href='verifyPass.php?id=%s'", $con->real_escape_string($row['student_id'])); 
          echo "'<button>verity</button></td>";
       
    }
}
else{
    echo 'This row is empty';
}
    ?> 
    </tr>
        </table>

        <br><br>
     
<a href="logout.php"><button id="logoutBtn">Log Out</button></a>
</body>
</html>
