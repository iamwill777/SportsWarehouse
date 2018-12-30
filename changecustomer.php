<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="customer.css">
<?php
    include "home.php";
    include "connecttodb.php";
?>
<form action="#" method ="post">
<div id = add_cust>
    <!-- Prompts user to enter customer information with proper formatting-->
    Add New Customer: 
    <br>
    <br>
    Customer ID: 
    <input name="id" type="number" id="id" min="1" step="1">
    <br>
    First Name:
    <input name="fname" type="text" id="fname" maxlength = 10 size = 10 required>
    <br>
    Last Name:
    <input name="lname" type="text" id="lname" maxlength = 10 size = 10 required>
    <br>
    City:
    <input name="city" type="text" id="city" maxlength = 15 size = 15 required>
    <br>
    Phone: 
    <input name="phone" type="telephone" id="phone" pattern="[0-9]{3}-[0-9]{4}" required>
    <br>
    <?php
        include "getagent.php";
    ?>
    <br>
    <input type="submit" name="submit" value="Submit" id = "submit"/>
    <?php
        // Inserts new customer into database
        include "connecttodb.php";
        include "addcust.php";
    ?>
    <hr>
</div>
</form>
<form action="#" method ="post">
<div id = del_cust>
    <!-- User can delete customer from dropdown-->
    Delete Customer: 
    <br>
    <br>
    <?php
        // Displays customer list
        include "connecttodb.php";
        include "getcust.php";
    ?>
    <br>
    <input type="submit" name="submit" value="Submit" id = "submit"/>
    <?php
        // Deletes customer from database
        include "connecttodb.php";
        include "delcust.php";
    ?>
    <hr>
</div>
</form>
<form action="#" method ="post">
<div id = update_phone>
    <!-- User can select customer from dropdown-->
    <!-- and then update phone number -->
    Update Phone Number:
    <br>
    <br>
    <?php
        // Displays customer list with phone number
        include "connecttodb.php";
        include "getcustphone.php";
    ?>
    <br>
    New Phone Number: 
    <input name="phone" type="telephone" id="phone" pattern="[0-9]{3}-[0-9]{4}" required>
    <br>
    <input type="submit" name="submit" value="Submit" id = "submit"/>
    <?php
        // Updates phone number
        include "connecttodb.php";
        include "updatephone.php";
    ?>
</div>
</form>
</html>