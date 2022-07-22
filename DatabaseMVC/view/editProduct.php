<?php 

require_once '../controller/productInfo.php';
$product = fetchProduct($_GET['id']);
 include "nav.php";
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <form action="../controller/updateProduct.php" method="POST" enctype="multipart/form-data">
 <input type="text" id="id" name="id" value="<?php echo $product['id'] ?>"><br>
 <label for="name">Name:</label><br>
  <input type="text" id="name" name="name" value="<?php echo $product['name'] ?>"><br>

  <label for="buying_price">Buying Price:</label><br>
  <input type="text" id="buying_price" name="buying_price" value="<?php echo $product['buying_price'] ?>"><br>
  
  <label for="selling_price">Selling Price:</label><br>
  <input type="text" id="selling_price" name="selling_price"  value="<?php echo $product['selling_price'] ?>"><br>
  
  
  <input type="checkbox" name="display" value="1" <?php if ($product['display'] == '1') { echo "checked='checked'"; } ?>/> 
  <label for="display">display:</label><br>
  

<br/>
  <input type="submit" name = "updateProduct" value="Update">
  <input type="reset"> 
</form> 

</body>
</html>

