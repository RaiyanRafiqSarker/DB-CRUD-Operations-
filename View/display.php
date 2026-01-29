<?php
require_once('../Controller/DisplayController.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Display Products</title>
    <link rel="stylesheet" href="../design.css">
</head>
<body>

<form align="center">
<fieldset>
    <legend style="color:red;">DISPLAY</legend>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <td><b>NAME</b></td>
            <td><b>PROFIT</b></td>
            <td><b>ACTION</b></td>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($products)) { ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td>
                <?php
                    echo $row['selling_price'] - $row['buying_price'];
                ?>
            </td>
            <td>
                <a href="edit.php?id=<?php echo $row['id']; ?>">edit</a>
                |
                <a href="delete.php?id=<?php echo $row['id']; ?>">delete</a>
            </td>
        </tr>
        <?php } ?>

    </table>

</fieldset>
</form>

</body>
</html>
