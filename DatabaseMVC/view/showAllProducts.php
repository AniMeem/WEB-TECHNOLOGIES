<?php  
require_once '../controller/productInfo.php';

$products = fetchAllProducts();


    include "nav.php";



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 75%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.column {
  float: left;
  width: 80%;
  padding: 10px;
  height: 30px; 
}


.row:after {
  content: "";
  display: table;
  clear: both;
}

</style>
</head>
<body>


<h2>Show all students</h2>
<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Buying Price</th>
			<th>Selling Price</th>
			<th>Display</th>
		
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($products as $i => $product): ?>
			<tr>
				<td><a href="../view/showProduct.php?id=<?php echo $product['id'] ?>"><?php echo $product['name'] ?></a></td>
				<td><?php echo $product['buying_price'] ?></td>
				<td><?php echo $product['selling_price'] ?></td>
				<td><?php echo $product['display'] ?></td>
				<td><a href="../view/editProduct.php?id=<?php echo $product['id'] ?>">Edit</a>&nbsp<a href="../controller/deleteProduct.php?id=<?php echo $product['id'] ?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>