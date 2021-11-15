<?php

require_once('db.php');

function getProducts()
{
	return query("select * from products");
}

function getProductsTable()
{
	return query("select id,name,(sellingPrice-buyingPrice) as profit, displayable from products");
}

function addProduct($product)
{
	if (isPreparedStatementExecuted("insert into products (name,buyingPrice,sellingPrice,displayable) values(?,?,?,?)", 'sdds', $product['name'], $product['buyingPrice'], $product['sellingPrice'], $product['displayable'])) {
		return true;
	}
	return false;
}

function editProduct($product)
{

	if (isPreparedStatementExecuted("update products set name=?, buyingPrice=?, sellingPrice=?, displayable=? where id=?", 'sddsi', $product['name'], $product['buyingPrice'], $product['sellingPrice'], $product['displayable'], $product['id'])) {
		return true;
	}
	return false;
}

function deleteProduct($productId)
{
	if (isPreparedStatementExecuted("delete from products where id=?", 'i', $productId)) {
		return true;
	}
	return false;
}

function getProductById($id)
{
	$rows = preparedQueryToAssocArray("select * from products where id=?", 'i', $id);
	if (count($rows) > 0) {
		return $rows[0];
	}
	return null;
}

function getFilteredProductsTable($query)
{
	$key = '%' . $query . '%';
	return preparedQueryToAssocArray("select id,name,(sellingPrice-buyingPrice) as profit, displayable from products where name like ?", 's', $key);
}

$rows = getProductsTable();
//print_r($rows);
