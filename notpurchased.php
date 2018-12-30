<?php
    // Query to get items never purchased
    $query = "SELECT description FROM product
    LEFT JOIN purchases ON product.prodID = purchases.prodID
    WHERE purchases.prodID IS NULL";
    mysqli_query($connection, $query) or die('Error querying database.');
    $result = mysqli_query($connection, $query);
    // Outputs description to user
    echo "Products Never Purchased: ";
    while ($row = mysqli_fetch_array($result)) {
        echo "<br>";
        echo $row['description'];
    }
    mysqli_free_result($result);
    $connection->close();
?>