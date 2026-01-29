<?php
require_once('../Controller/DeleteController.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete Product</title>
    <link rel="stylesheet" href="../design.css">
</head>
<body>

<form action="../Controller/DeleteConfirmController.php" method="post">
<fieldset>
    <legend style="color:red;">DELETE PRODUCT</legend>

    <table>
        <tr>
            <td>Name:</td>
            <td><?php echo $product['name']; ?></td>
        </tr>
        <tr>
            <td>Buying Price:</td>
            <td><?php echo $product['buying_price']; ?></td>
        </tr>
        <tr>
            <td>Selling Price:</td>
            <td><?php echo $product['selling_price']; ?></td>
        </tr>
        <tr>
            <td>Displayable:</td>
            <td><?php echo $product['display']; ?></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
                <button type="submit">Delete</button>
            </td>
        </tr>
    </table>

</fieldset>
</form>

</body>
</html>
