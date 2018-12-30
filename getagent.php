<?php
    $query = "SELECT agentID, firstname, lastname FROM agent";
    mysqli_query($connection, $query) or die('Error querying database.');

    $result = mysqli_query($connection, $query);

    // Creates dropdown based on agent
    echo "Agent: ";
    echo "<select name =agents>";
    while ($row = mysqli_fetch_array($result)){
        echo "<option value='" . $row['agentID'] . "'>" . $row['firstname'] . " " . $row['lastname'] . "</option>";
    }
    echo "</select>";
    mysqli_free_result($result);
    $connection->close();
?>