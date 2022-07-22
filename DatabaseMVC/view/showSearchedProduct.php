
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table,td,th{
			border:1px solid black;
		}
	</style>
</head>
<body>

<?php 
    include "nav.php";

?>

<table>
	<thead>
		<tr>
			<th>Product_id</th>
			<th>Product_name</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($allSearchedProducts as $i => $product): ?>
			<tr>
				<td><a href="../view/showProduct.php?id=<?php echo $product['id'] ?>"><?php echo $product['id'] ?></a></td>
				<td><?php echo $product['name'] ?></td>
				<td><a href="../view/editProduct.php?id=<?php echo $product['id'] ?>">Edit</a>&nbsp<a href="../controller/deleteProduct.php?id=<?php echo $product['id'] ?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>