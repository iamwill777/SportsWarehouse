<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="information.css">
<?php
    include "home.php";
    include "connecttodb.php";
?>
<form action="#" method="post">
<div id = customer>
    <?php
        // Gets customer table
        include "customer.php";
    ?>
</div>
<!-- To submit-->
<!-- Submits desired option-->
<input type="submit" name="submit" value="Submit" id = "submit" style="font-family:'Slabo+27px';"/>
</form>
<hr>
<div id = displayproducts>
    <?php
        // Displays products purchased
        include "connecttodb.php";
        include "displayproducts.php";
    ?>
</div>
</html>