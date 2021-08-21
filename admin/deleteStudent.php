<?php
  //require '../includes/officialAuth.inc.php';
require '../includes/connection.inc.php';


//delete.php?id=2
    $id = $_GET['id'];
  $sqloff = "SET FOREIGN_KEY_CHECKS=0";

  $sql = "DELETE FROM student WHERE mat_no=$id";

  $sqlon = "SET FOREIGN_KEY_CHECKS=1";

  $con->query($sqloff);
  $con->query($sql);
  $con->query($sqlon);

    if($con->error){
        echo $con->error;
    }
 header('Location: index.php');
  $con->close();


?>
