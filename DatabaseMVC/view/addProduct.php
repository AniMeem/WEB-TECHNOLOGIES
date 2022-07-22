<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <?php 
        include "nav.php";

     ?>
   

 <form action="../controller/createProduct.php" method="POST" enctype="multipart/form-data">
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>

  <label for="buying_price">Buying Price:</label><br>
  <input type="text" id="buying_price" name="buying_price"><br>
  
  <label for="selling_price">Selling Price:</label><br>
  <input type="text" id="selling_price" name="selling_price"><br>

  <input type="checkbox" name="display" value="1" />
  <label for="display">display:</label><br>
  
  <!-- <input type="radio" id="active" name="display" value=1>
  <label for="active">Active</label>&nbsp;&nbsp;
  <input type="radio" id="inactive" name="display" value=0>
  <label for="inactive">Inactive</label><br> -->
  <br/>
  <input type="submit" name ="createProduct" value="Create">
  <input type="reset"> 
</form> 

</body>
</html>

