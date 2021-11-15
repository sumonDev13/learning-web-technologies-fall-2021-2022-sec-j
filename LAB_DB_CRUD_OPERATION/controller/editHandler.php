<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function hasEmptyStr($strings)
{
	$n = count($strings);
	for ($i = 0; $i < $n; ++$i) {
		if ($strings[$i] == "") {
			return true;
		}
	}
	return false;
}
if (isset($_POST['submit'])) {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$buyingPrice = $_POST['buyingPrice'];
	$sellingPrice = $_POST['sellingPrice'];
	$displayable = $_POST['display'] == 'on' ? 'Yes' : 'No';


	if (hasEmptyStr(array($id, $name, $buyingPrice, $sellingPrice))) {
		echo 'Invalid input';
		return;
	}

	require_once('../model/productModel.php');

	$product = array('id' => $id, 'name' => $name, 'buyingPrice' => $buyingPrice, 'sellingPrice' => $sellingPrice, 'displayable' => $displayable);

	if (editProduct($product)) {
		header('location: ../views/index.php');
		return;
	}
	echo 'Editing product failed';
	return;
}

echo 'Submission error';
return;
