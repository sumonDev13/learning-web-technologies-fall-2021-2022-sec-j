<?php

$id = $_GET['id'];

if (!$id) {
	echo 'Invalid ID';
	return;
}

require_once('../model/productModel.php');

if (deleteProduct($id)) {
	header('location: ../views/index.php');
	return;
}

echo 'Deleting product failed';
return;
