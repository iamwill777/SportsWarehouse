<!DOCTYPE html>
<html>

<head>
    <!-- Header-->
    <!-- Includes fonts-->
    <title>Warehouse Solutions</title>
    <link rel="stylesheet" type="text/css" href="warehouse.css">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
</head>

<body>
    <h1>Sports Warehouse
    <img src="sports.png"/>
    </h1>
    Select viewing option:
     <!-- Links to pages-->
    <select name="links" onchange="location = this.value;">
        <option value="home.php" selected disabled hidden >Select Here</option>
        <option value="customerinformation.php">Customer Information</option>
        <option value="products.php">Product Information</option>
        <option value="purchase.php">Create New Purchase</option>
        <option value="changecustomer.php">Update Customer Information</option>
        <option value="purchasesummary.php">Purchase Summary</option>
    </select>
    <hr>
</body>

</html>