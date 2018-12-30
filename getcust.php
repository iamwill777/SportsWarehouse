<?php
    // Dropdown for customer id
    echo "Customer: ";
    $query = "SELECT cusID, firstname, lastname FROM customer";
    mysqli_query($connection, $query) or die('Error querying database.');

    $result = mysqli_query($connection, $query);

    // Creates dropdown based on customer id
    echo "<select name =customerid>";
    while ($row = mysqli_fetch_array($result)){
        echo "<option value='" . $row['cusID'] . "'>" . $row['cusID'] . ": " . $row['firstname'] . " " . $row['lastname'] . "</option>";
    }
    echo "</select>";
    mysqli_free_result($result);
    $connection->close();
?>