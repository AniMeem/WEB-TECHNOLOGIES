<?php  
require_once '../model/model.php';


if (isset($_POST['updateProduct'])) {
    $id = $_POST['id'];
	$data['name'] = $_POST['name'];
	$data['buying_price'] = $_POST['buying_price'];
	$data['selling_price'] = $_POST['selling_price'];
	$adopted = (isset($_POST['display']) == '1' ? '1' : '0');
	$data['display'] = $adopted;
	
  if (updateProduct($id, $data)) {
  	echo 'Successfully updated!!';
  	//redirect to showStudent
  	header('Location: ../view/showProduct.php?id=' .$id);
  }
} else {
	echo 'You are not allowed to access this page.';
}


?>