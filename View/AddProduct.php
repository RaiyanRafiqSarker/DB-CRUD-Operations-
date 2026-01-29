<html>
 <head>
        <title>Products</title>
        <link rel="stylesheet" href="../design.css">
 </head>

  <body>

     <form  action="../Controller/AddProductController.php" method="post">
        <fieldset>
            <legend style="color: red;">Add Product</legend>
        <table>
            <tr>
            <td><label for="name">Name:</label><br></td>
            </tr>
            <tr>
            <td><input id="name" type="text" value="" name="name"><br></td>
            </tr>

            <tr>
            <td><label for="buying_price">Buying Price:</label><br></td>
            </tr>
            <tr>
            <td><input id="buying_price" type="text" value="" name="buying_price"><br></td>
            </tr>

            <tr>
             <td><label for="selling_price">Selling Price:</label><br></td>
             </tr>
             <tr>
             <td><input id="selling_price" type="text" mail="" value="" name="selling_price"/><br>
            </tr>
            
            <tr>
                
                <td>
                    <input type="checkbox" name="display" value=""/>Display
                </td>
                
            </tr>
            
            <tr>
        
            <td>
                <button type="submit">Save </button>
            </td>
            </tr>

            
        </table> 
        </fieldset>
  
      </form>

    
  </body>
</html>