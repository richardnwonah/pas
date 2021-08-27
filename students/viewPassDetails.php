<?php


//require '../includes/officialAuth.inc.php';
require '../includes/connection.inc.php';
$student_id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>View Verified Pass</title>
</head>
<body>
    <div id="header">
    <h1>Wellspring University</h1>
   
    
</div>

<div id="main">
        <p><b>View Pass</b></p><br>
    <?php
    
    $sql = "SELECT * FROM pass WHERE student_id ='$student_id'";
    $result = $con->query($sql);
    
    if($result != null)
    {
        
        echo "<table>
        <tr>
      
        <th>Date</th>
        <th>Reason</th>
        <th>Status</th>  

        </tr>";
        echo  "<tr>";
    foreach($result as $row)
    { 
        $cso = $row['csoVerification'];
        $par = $row['parVerification'];
        $dean = $row['deanVerification'];
        $isValid ="Valid";

        if( $cso !=1 && $par !=1 && $dean !=1){
            $isValid ="Not Valid";
        }

        
         echo "<td>".$row['date'];"</td>";
        echo "<td>".$row['reason'];"</td>"; 
        echo "<td>".$isValid;"</td>";
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

    <a href="requestPass.php"><button>Go Back</button></a>
</div>
<div id="footer">
    <marquee>Developed by Rephael Leesi Mitee CNAS/17086</marquee>
</div>
</body>
</html>
S