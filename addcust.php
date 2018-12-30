<?php
    if (isset ($_POST["submit"]) && isset ($_POST["id"]) && (isset ($_POST["fname"])) && (isset ($_POST["lname"])) && (isset ($_POST["city"])) && (isset ($_POST["phone"]))){
        // Sets variables
        $cusID = $_POST["id"];
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $city = $_POST["city"];
        $phone = $_POST["phone"];
        $agent = $_POST["agents"];
        // Insert query for customer
        $query = "INSERT INTO customer 
        VALUES('$cusID', '$fname', '$lname', '$city', '$phone', '$agent')"; 
        echo "<br>";
        // If value is inserted correctly
        if ($connection->query($query) === TRUE) {
            echo "Customer #" . $cusID . " added.";
        } 
        // Otherwise returns error
        else {
            echo "Please enter a different Customer ID. Customer ID already in use.";
        }
    }
    $connection->close();
?>