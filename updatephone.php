<?php
    if (isset ($_POST["submit"]) && isset ($_POST["phone"]) && !isset ($_POST["id"])){
        // Sets variables
        $cusID = $_POST["customer"];
        $phone = $_POST["phone"];
        // Update query
        $query = "UPDATE customer
        SET phonenumber = '$phone'
        WHERE cusID = '$cusID'";
        echo "<br>";
        // If phone is updated
        if ($connection->query($query) === TRUE) {
            echo "Customer #" . $cusID . " phone number updated to: " . $phone;
        } 
        // Otherwise returns error
        else {
            echo "Error. Cannot Update Phone Number.";
        }
    }
    $connection->close();
?>