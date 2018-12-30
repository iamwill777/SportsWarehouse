<?php
    if (isset ($_POST["submit"]) && isset ($_POST["customerid"])){
        // Sets variables
        $cusID = $_POST["customerid"];
        // Delete query
        $query = "DELETE FROM customer WHERE cusID = '$cusID'";
        echo "<br>";
        // If customer has not purchased anything
        if ($connection->query($query) === TRUE) {
            echo "Customer #" . $cusID . " has been deleted.";
        } 
        // Otherwise returns error
        else {
            echo "Error: Cannot Delete Customer. ";
        }
    }
    $connection->close();
?>