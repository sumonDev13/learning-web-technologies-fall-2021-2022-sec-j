<?php

$id = $_GET['id'];

if ($id == "") {
	echo 'Invalid ID';
	return;
}

require_once('../model/productModel.php');

$product = getProductById($id);

if (!$product) {
	echo 'Product not found';
	return;
}

?>
<form action="../controller/editHandler.php" method="POST">
	<table>
		<td><input type="text" hidden name="id" value="<?= $product['id'] ?>"></td>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" value="<?= $product['name'] ?>"></td>
		</tr>
		<tr>
			<td>Buying Price</td>
			<td><input type="text" name="buyingPrice" value="<?= $product['buyingPrice'] ?>"></td>

		</tr>
		<tr>
			<td>Selling Price</td>
			<td><input type="text" name="sellingPrice" value="<?= $product['sellingPrice'] ?>"></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="checkbox" name="display" <?= $product['displayable'] == 'Yes' ? 'checked' : '' ?>>
				Displayable
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit" value="Save Edit"></td>
		</tr>
	</table>
</form>
