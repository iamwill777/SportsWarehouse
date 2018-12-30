<?php
    // If a product is selected
    if (isset($_POST['product']) && $_POST['product'] != '') {
        $id = $_POST['product'];
        // Query to get products purchased
        $query = "SELECT SUM(purchases.Quantity) AS 'total', product.description, product.cost, SUM(purchases.Quantity) * product.cost AS 'totalCost' FROM purchases
        INNER JOIN product ON purchases.prodID = product.prodID
        WHERE purchases.prodID = '$id'";
        $result = mysqli_query($connection, $query)  or die('Error querying database.');
        // If customer did not purchase anything
        $row = mysqli_fetch_array($result);
        if (is_null($row['total'])){
            echo "Product Has Not Been Purchased";
        }
        // Otherwise displays all products
        else{
            echo "Product: " . $row['description'];
            echo "<br>";
            echo "Cost Per Item: $" . $row['cost'];
            echo "<br>";
            echo "Total Purchased: " . $row['total'];
            echo "<br>";
            echo "Total Cost: $" . $row['totalCost'];
            // Frees result
            mysqli_free_result($result);
        }
    }
    else{
        echo "Please select a product. ";
    }
    $connection->close();
?>