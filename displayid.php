<?php
    // Dropdown for customer id
    echo "Customer ID: ";
    $query = "SELECT cusID, firstname, lastname FROM customer";
    mysqli_query($connection, $query) or die('Error querying database.');

    $result = mysqli_query($connection, $query);

    // Creates dropdown based on customer id
    echo "<select name =customerid>";
    echo "<option value = ''> Select Customer Here</option>";
    while ($row = mysqli_fetch_array($result)){
        echo "<option value='" . $row['cusID'] . "'>" . $row['cusID'] . ": " . $row['firstname'] . " " . $row['lastname'] . "</option>";
    }
    echo "</select>";
    mysqli_free_result($result);

    echo "<br>";

    // Dropdown for product id
    echo "Product ID: ";
    $query = "SELECT prodID, description FROM product";
    mysqli_query($connection, $query) or die('Error querying database.');

    $result = mysqli_query($connection, $query);

    // Creates dropdown based on product id
    echo "<select name =productid>";
    echo "<option value = ''> Select Product Here</option>";
    while ($row = mysqli_fetch_array($result)){
        echo "<option value='" . $row['prodID'] . "'>" . $row['prodID'] . ": " . $row['description'] . "</option>";
    }
    echo "</select>";
    mysqli_free_result($result);
    $connection->close();
?>