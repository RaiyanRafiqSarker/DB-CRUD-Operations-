<?php
require_once('db.php');

function getDisplayProducts()
{
    $conn = getConnection();
    $sql = "SELECT * FROM products WHERE display = 'Yes'";
    $result = mysqli_query($conn, $sql);
    return $result;
}

function getProductById($id)
{
    $conn = getConnection();
    $sql = "SELECT * FROM products WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_assoc($result);
}

function updateProduct($id, $name, $buying, $selling, $display)
{
    $conn = getConnection();
    $sql = "UPDATE products 
            SET name='$name',
                buying_price=$buying,
                selling_price=$selling,
                display='$display'
            WHERE id=$id";

    return mysqli_query($conn, $sql);
}

function deleteProduct($id)
{
    $conn = getConnection();
    $sql = "DELETE FROM products WHERE id = $id";
    return mysqli_query($conn, $sql);
}

function searchProducts($key)
{
    $conn = getConnection();
    $sql = "SELECT * FROM products 
            WHERE name LIKE '%$key%' 
            AND display = 'Yes'";
    return mysqli_query($conn, $sql);
}
