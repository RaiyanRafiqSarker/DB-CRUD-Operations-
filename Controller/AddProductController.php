<?php
require_once('../Model/db.php');

$name = $_POST['name'];
$buying = $_POST['buying_price'];
$selling = $_POST['selling_price'];

if (isset($_POST['display'])) {
    $display = "Yes";
} else {
    $display = "No";
}

$conn = getConnection();

$sql = "INSERT INTO products (name, buying_price, selling_price, display)
        VALUES ('$name', $buying, $selling, '$display')";

mysqli_query($conn, $sql);

header("Location: ../View/display.php");
