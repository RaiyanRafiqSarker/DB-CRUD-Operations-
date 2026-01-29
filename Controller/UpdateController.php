<?php
require_once('../Model/ProductModel.php');

$id = $_POST['id'];
$name = $_POST['name'];
$buying = $_POST['buying_price'];
$selling = $_POST['selling_price'];

if (isset($_POST['display'])) {
    $display = "Yes";
} else {
    $display = "No";
}

updateProduct($id, $name, $buying, $selling, $display);

header("Location: ../View/display.php");
