<?php
require_once('../Model/ProductModel.php');

if (!isset($_GET['id'])) {
    header("Location: ../View/display.php");
    exit;
}

$id = $_GET['id'];
$product = getProductById($id);

