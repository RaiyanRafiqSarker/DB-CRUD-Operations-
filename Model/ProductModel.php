<?php
require_once('db.php');

function getDisplayProducts()
{
    $conn = getConnection();
    $sql = "SELECT * FROM products WHERE display = 'Yes'";
    $result = mysqli_query($conn, $sql);
    return $result;
}
