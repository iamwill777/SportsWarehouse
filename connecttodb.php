<?php
     // Connects to specified database
     $dbhost = "localhost";
     $dbuser= "root";
     $dbpass = "";
     $dbname = "sports_warehouse";
     $connection = mysqli_connect($dbhost, $dbuser,$dbpass,$dbname); if (mysqli_connect_errno()) {
          die("Database connection failed :" .
     mysqli_connect_error() . " (" . mysqli_connect_errno() . ")" ); } //end of if statement
?>


