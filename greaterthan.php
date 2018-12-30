<?php
    if (isset ($_POST["quantity"])){
        echo "<hr>";
        $quantity = $_POST["quantity"];
        // Makes sure quantity is valid
        if ($quantity > 0 ){
            echo "Products that have been purchased more than " . $quantity . " times: ";
            echo "<br>";
            // Query
            $query = "SELECT customer.firstname, customer.lastname, product.description, purchases.quantity
            FROM customer
            INNER JOIN purchases ON customer.cusID = purchases.cusID
            INNER JOIN product ON purchases.prodID = product.prodID
            WHERE purchases.quantity > '$quantity'";
            mysqli_query($connection, $query) or die('Error querying database.');

            $result = mysqli_query($connection, $query);
            
            // If there no products purchased
            if (is_null($row = mysqli_fetch_array($result))){
                echo "No Products Available";
            }
            else{
                // Displays data
                while ($row = mysqli_fetch_array($result)) {
                    echo $row['firstname'] . " " . $row['lastname'] . " has bought " . $row['quantity'] . " " . $row['description'] . ".";
                    echo "<br>";
                }
            }
            // Frees result
            mysqli_free_result($result);
        }
        else{
            echo "Please enter an integer greater than 0.";
        }
    }
    $connection->close();
?>