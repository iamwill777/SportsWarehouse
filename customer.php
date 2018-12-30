<?php
    $query = "SELECT * FROM customer ORDER BY lastname";
    mysqli_query($connection, $query) or die('Error querying database.');

    $result = mysqli_query($connection, $query);

    // Creates table
    echo "<table border='1'>        
    <tr>
    <th>Select Customer</th>
    <th>Customer ID</th>
    <th>Name</th>
    <th>Phone Number</th>
    <th>City</th>
    </tr>";
    
    // Displays data on table
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        // Allows user to select customer ID
        echo "<td> <input type='radio' name='select_customer' value='". $row['cusID'] . "'/> </td>";
        echo "<td>" . $row['cusID'];
        echo "<td>" .$row['lastname'] . ', ' . $row['firstname'];
        echo "<td>" .$row['phonenumber'];
        echo "<td>" .$row['city'];
        echo "</tr>";
    }
    // Frees result
    mysqli_free_result($result);
    echo "</table>";
    $connection->close();
?>