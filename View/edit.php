<?php
require_once('../Controller/EditController.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
    <link rel="stylesheet" href="../design.css">
</head>
<body>

<form action="../Controller/UpdateController.php" method="post">
<fieldset>
    <legend style="color:red;">EDIT PRODUCT</legend>

    <table>
        <tr>
            <td>Name</td>
        </tr>
        <tr>
            <td>
                <input type="text" name="name" value="<?php echo $product['name']; ?>">
            </td>
        </tr>

        <tr>
            <td>Buying Price</td>
        </tr>
        <tr>
            <td>
                <input type="text" name="buying_price" value="<?php echo $product['buying_price']; ?>">
            </td>
        </tr>

        <tr>
            <td>Selling Price</td>
        </tr>
        <tr>
            <td>
                <input type="text" name="selling_price" value="<?php echo $product['selling_price']; ?>">
            </td>
        </tr>

        <tr>
            <td>
                <input type="checkbox" name="display"
                <?php if ($product['display'] == "Yes") { echo "checked"; } ?>>
                Display
            </td>
        </tr>

        <tr>
            <td>
                <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
                <button type="submit">Save</button>
            </td>
        </tr>
    </table>

</fieldset>
</form>

</body>
</html>
