<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="purchase.css">
<?php
    include "home.php";
    include "connecttodb.php";
?>
<form action="#" method="post">
<!--Form for user to determine purchase input-->
<div id = add_purchase>
    <?php
        // Gets data from user via dropdown
        include "displayid.php";
    ?>
    <br>
    Enter Quantity Purchased: 
    <input name="quantity" type="number" id="quantity" style="font-family:'Slabo+27px';" min="1" step = "1">
    <br>
    <input type="submit" name="submit" value="Submit" id = "submit" style="font-family:'Slabo+27px';"/>
</div>
</form>
<hr>
<div id = show_purchase>
    <?php
        // Inserts or updates purchases depending if item has been purchased before
        include "connecttodb.php";
        include "insertpurchase.php";
    ?>
</div>
</html>