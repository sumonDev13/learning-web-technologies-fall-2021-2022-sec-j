<form action="../controller/addHandler.php" method="POST">
	<table>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>Buying Price</td>
			<td><input type="text" name="buyingPrice"></td>

		</tr>
		<tr>
			<td>Selling Price</td>
			<td><input type="text" name="sellingPrice"></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="checkbox" name="display" checked>
				Displayable
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit" value="Save"></td>
		</tr>
	</table>
</form>
