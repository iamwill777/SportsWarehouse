<?php
    if (isset ($_POST["orderBy"])){
        // Sets variables
        $method = $_POST['order'];
        $orderBy = $_POST['orderBy'];
        if ($method != "" && $orderBy != "" ){
            echo "Order by " . $orderBy . " " . $method . "ending"; 
            $query = "SELECT description, cost FROM product ORDER BY $orderBy $method";
            mysqli_query($connection, $query) or die('Error querying database.');

            $result = mysqli_query($connection, $query);
            
            // Creates table
            echo "<table border='1'>        
            <tr>
            <th>Product</th>
            <th>Cost</th>
            </tr>";

            // Displays data on table
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['description'];
                echo "<td>" . "$" . $row['cost'];
                echo "</tr>";
            }
            // Frees result
            echo "</table>";
            mysqli_free_result($result);
        }
        else{
            echo "Please select an option.";
        }
    }
    $connection->close();
?>