<?php
function getConnection()
{
    $conn = mysqli_connect("localhost", "root", "", "product_db");

    if ($conn == false) {
        die("Connection error");
    }

    return $conn;
}
