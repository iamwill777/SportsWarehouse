<?php
    // Select Query
    echo "Products: ";
    $query = "SELECT prodID, description FROM product";
    mysqli_query($connection, $query) or die('Error querying database.');

    $result = mysqli_query($connection, $query);

    // Creates dropdown based on products
    echo "<select name =product>";
    echo "<option value = ''> Select Product Here</option>";
    while ($row = mysqli_fetch_array($result)){
        echo "<option value='" . $row['prodID'] . "'>" . $row['prodID'] . ": " . $row['description'] . "</option>";
    }
    echo "</select>";
    mysqli_free_result($result);
    $connection->close();
?>