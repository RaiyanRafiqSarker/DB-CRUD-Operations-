<!DOCTYPE html>
<html>
<head>
    <title>Search Product</title>
    <link rel="stylesheet" href="../design.css">

<script>
function searchProduct(value)
{
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "../Controller/SearchController.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById("result").innerHTML = xhr.responseText;
        }
    };

    xhr.send("key=" + value);
}
</script>

</head>
<body>

<form>
<fieldset>
    <legend style="color:red;">SEARCH</legend>

    <table>
        <tr>
            <td>Search</td>
        </tr>
        <tr>
            <td>
                <input type="text" onkeyup="searchProduct(this.value)">
            </td>
        </tr>
        <tr>
            <td>
                <div id="result"></div>
            </td>
        </tr>
    </table>

</fieldset>
</form>

</body>
</html>
