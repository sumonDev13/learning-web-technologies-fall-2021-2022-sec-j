<?php

$num1 = $_REQUEST['num1'];
$num2 = $_REQUEST['num2'];
$operator = $_REQUEST['operator'];

switch ($operator) {
	case 'add':
		echo (float)$num1 + (float)$num2;
		break;
	case 'sub':
		echo (float)$num1 - (float)$num2;
		break;
	case 'mul':
		echo (float)$num1 * (float)$num2;
		break;
	case 'div':
		echo (float)$num1 / (float)$num2;
		break;
	default:
		echo 'Invalid Operator';
		break;
}
