<?php
require_once('../Model/ProductModel.php');

$id = $_POST['id'];

deleteProduct($id);

header("Location: ../View/display.php");
