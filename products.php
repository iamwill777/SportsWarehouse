<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="products.css">
<?php
    include "home.php";
    include "connecttodb.php";
?>
<div id = notPurchased>
    <?php
        // First displays items not purchased
        include "notpurchased.php";
    ?>
    <hr>
</div>
<form action="#" method="post">
<div id = select_methods>
    <!-- Creates dropdown menu-->
    Order Method: 
    <select name ='order' id = 'order'>
    <!-- Displays dropdown menu-->
    <option value = ""> Select Method Here</option>;
    <option value="asc">Ascending</option>
    <option value="desc">Descending</option>
    </select>
    <!-- Creates another dropdown menu-->
    Order By: 
    <select name ='orderBy' id = 'orderBy'>
    <!-- Displays dropdown menu-->
    <option value = ""> Select Category Here</option>;
    <option value='cost'>Cost</option>;
    <option value='description'>Name</option>;
    </select>
    <!-- Gets quantity from user-->
    Enter Desired Quantity: 
    <input name="quantity" type="number" id="quantity" step = "1" min="1" style="font-family:'Slabo+27px';">
    <br>
    <input type="submit" name="submit" value="Submit" id = "submit" style="font-family:'Slabo+27px';"/>
    <hr>
</div>
</form>
<div id = product>
    <?php
        // Get product list
        include "connecttodb.php";
        include "product.php";
    ?>
</div>
<div id = greaterThan>
    <?php
        // List all customers who bought more than a certain number of products
        include "connecttodb.php";
        include "greaterthan.php";
    ?>
</div>

</html>