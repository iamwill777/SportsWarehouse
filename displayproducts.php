<?php
    // If customer is selected
    if ( isset( $_POST["select_customer"] ) ) {
        $id = $_POST['select_customer'];
        // Query to get products purchased
        $query = "SELECT product.description, purchases.quantity FROM customer
        INNER JOIN purchases ON customer.cusID = purchases.cusID
        INNER JOIN product ON purchases.prodID = product.prodID
        WHERE purchases.cusID = '$id'";
        $result = mysqli_query($connection, $query)  or die('Error querying database.');
        // If customer did not purchase anything
        if (is_null($row = mysqli_fetch_array($result))){
            echo "No Products Purchased";
        }
        // Otherwise displays all products
        else{
            echo "Products Purchased";
            echo "<br>";
            echo $row['description'] . " Purchased: " . $row['quantity'];
            echo "<br>";
            while ($row = mysqli_fetch_array($result)) {
                echo $row['description'] . " Purchased: " . $row['quantity'];
                echo "<br>";
            }
            // Frees result and close connection
            mysqli_free_result($result);
        }
    }
    else{
        echo "Please select a customer. ";
    }
    $connection->close();
?>