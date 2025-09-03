<?php
include "connection.php";
include "model/product_model.php";
include "controller/product_controller.php";
include "view/product/product_view.php";
$products = new ProductView(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php include "./view/utils/navbar_utils.php"; ?>

<?php $products->find(); ?>

<table border="1">
    <tr>
    <th>ID</th>
    <th>NAME</th>
    <th>PRICE</th>
    <th>STOCK</th>
    </tr>

<?php $products->show() ?>

</table>


</body>
</html>