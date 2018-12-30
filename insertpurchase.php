<?php
    if (isset ($_POST["customerid"]) && $_POST["customerid"] != '' && isset ($_POST["productid"]) && $_POST["productid"] != '' && isset ($_POST["quantity"]) && $_POST["quantity"] > 0){
        // Sets variables
        $cusID = $_POST["customerid"];
        $prodID = $_POST["productid"];
        $quantity = $_POST["quantity"];
        // Insert query
        $query = "INSERT INTO purchases (cusID, prodID, Quantity) 
        VALUES('$cusID', '$prodID', '$quantity') 
        ON DUPLICATE KEY UPDATE Quantity = Quantity + '$quantity'";

        // If value is inserted correctly
        if ($connection->query($query) === TRUE) {
            echo "New record created successfully. ";
        } 
        // Otherwise returns error
        else {
            echo "Error: " . $query . "<br>" . $connection->error;
        }
    }
    else{
        echo "Please enter your information. ";
    }
    $connection->close();
?>