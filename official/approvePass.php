<?php

$id = $_GET["id"];
echo $id;


require '../includes/officialAuth.inc.php';
require '../includes/connection.inc.php';

echo $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Approve pass</title>
</head>
<body>
    <h1>fuckkk</h1>
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
        echo "<td><a href='verifyPass.php?id=".$row['id']; echo "'<button>verity</button></td>
        </tr>
        </table>
     ";

    }
}
else{
    echo 'This row is empty';
}
    ?>
</body>
</html>
