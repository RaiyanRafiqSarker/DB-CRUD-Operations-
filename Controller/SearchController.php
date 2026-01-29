<?php
require_once('../Model/ProductModel.php');

$key = $_POST['key'];
$result = searchProducts($key);

echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr>
        <td><b>NAME</b></td>
        <td><b>PROFIT</b></td>
        <td><b>ACTION</b></td>
      </tr>";

while ($row = mysqli_fetch_assoc($result)) {

    $profit = $row['selling_price'] - $row['buying_price'];

    echo "<tr>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$profit."</td>";
    echo "<td>
            <a href='edit.php?id=".$row['id']."'>edit</a> |
            <a href='delete.php?id=".$row['id']."'>delete</a>
          </td>";
    echo "</tr>";
}

echo "</table>";
