<?php

mysqli_report(MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ERROR);
function alertMsg($msg)
{
	echo '<script>alert("' . $msg . '")</script>';
}

function getConnection()
{
	$db_host = 'localhost';
	$db_name = 'product_db';
	$db_user = 'root';
	$db_password = '';
	$connection = new mysqli($db_host, $db_user, $db_password, $db_name);
	if ($connection->connect_error) {
		die('Connection Failed ' . $connection->connect_error);
	}
	return $connection;
}

function execPreparedStatement($sql, $types, ...$args)
{
	try {
		$con = getConnection();
		$stm = $con->prepare($sql);
		$stm->bind_param($types, ...$args);
		$stm->execute();
		return $stm;
	} catch (Exception $error) {
		alertMsg($error->getMessage());
		return null;
	}
}

function isPreparedStatementExecuted($sql, $types, ...$args)
{
	$stm = execPreparedStatement($sql, $types, ...$args);
	if (!$stm) {
		return false;
	}
	if ($stm->affected_rows < 1) {
		return false;
	}
	return true;
}

function execPreparedQuery($sql, $types, ...$args)
{
	try {
		$con = getConnection();
		$stm = $con->prepare($sql);
		$stm->bind_param($types, ...$args);
		$stm->execute();
		return $stm->get_result();
	} catch (Exception $error) {
		alertMsg($error->getMessage());
		return null;
	}
}

function preparedQueryToAssocArray($sql, $types, ...$args)
{
	$result = execPreparedQuery($sql, $types, ...$args);
	if (!$result) {
		return null;
	}
	return $result->fetch_all(MYSQLI_ASSOC);
}


function query($sql)
{
	try {
		$con = getConnection();
		return $con->query($sql)->fetch_all(MYSQLI_ASSOC);
	} catch (Exception $error) {
		alertMsg($error->getMessage());
		return null;
	}
}

//$con = getConnection();

//print_r($con);
