<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="summary.css">
<?php
    include "home.php";
    include "connecttodb.php";
?>
<form action="#" method="post">
<div id = getProducts>
    <?php
        // Gets products
        include "getproducts.php";
    ?>
    <br>
    <br>
    <input type="submit" name="submit" value="Submit" id = "submit" style="font-family:'Slabo+27px';"/>
</div>
</form>
<hr>
<div id = summary>
    <?php
        // Displays summary according to product selected
        include "connecttodb.php";
        include "summary.php";
    ?>
</div>
</html>