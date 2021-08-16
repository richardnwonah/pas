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
    <title>View Students</title>
</head>
<body>
    <h1>View Students</h1>
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
        <th>Delete</th>
        <th>Update</th>
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
       echo "<td> <a href='verifyPass.php?id=".$row['student_id']' "'; echo "<button>verity</button></td>"
     echo"  </tr>";

    }  
    
}
else{
    echo 'This row is empty';
}
    ?>
    </table>
</body>
</html>
