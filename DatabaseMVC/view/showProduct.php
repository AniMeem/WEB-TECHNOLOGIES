<?php  
require_once '../controller/productInfo.php';

echo '****',$_GET['id'];
$product = fetchProduct($_GET['id']);
    include "nav.php";



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<tr>
		<th>Name</th>
		<th>Buying Price</th>
		<th>Selling Price</th>
		<th>Display</th>
	</tr>
	<tr>
		<td><a href="../view/showProduct.php?id=<?php echo $product['id'] ?>"></a></td>
        <td><?php echo $product['name'] ?></td>
		<td><?php echo $product['buying_price'] ?></td>
		<td><?php echo $product['selling_price'] ?></td>
		<td><?php echo $product['display'] ?></td>
	</tr>

</table>


</body>
</html>