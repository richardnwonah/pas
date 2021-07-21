<?php

//defining connection variables
define("MYSQL_HOST", "localhost");
define("MYSQL_USER", "root");
define("MYSQL_PASSWORD", "");
define("MYSSQL_DBNAME", "pmsdb");


//connection to the database
$con = new mysqli(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSSQL_DBNAME);

/* check connection */
if ($con->connect_errno) {
    printf("Connect failed: %s\n", $con->connect_error);
    exit();
}

/* check if server is alive */
if ($con->ping()) {
    printf ("Our connection is ok!\n");
} else {
    printf ("Error: %s\n", $con->error);
}