<?php  
require_once '../model/model.php';


if (isset($_POST['createProduct'])) {
	$data['name'] = $_POST['name'];
	$data['buying_price'] = $_POST['buying_price'];
	$data['selling_price'] = $_POST['selling_price'];
	$adopted = (isset($_POST['display']) == '1' ? '1' : '0');
	$data['display'] = $adopted;

	echo $data;

  if (addProduct($data)) {
  	echo '\nSuccessfully added!!';
  }
} else {
	echo '\nYou are not allowed to access this page.';
}

?>