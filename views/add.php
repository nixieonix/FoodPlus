<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add new product</title>
</head>
<body>
	<h2 align="center">Add new product</h2>
	<form method="post" action='<?php echo site_url('product/save'); ?>'>
		<table border="0" cellspacing="0" cellpadding="0" width="500" align="center">
			<tr>
				<td>Name:</td>
				<td><input type="text" name='textname' required></td>
			</tr>
			<tr>
				<td>Description:</td>
				<td><textarea name="textdesc"></textarea></td>
			</tr>
			<tr>
				<td>Production date:</td>
				<td><input type="text" name='textproddate' required></td>
			</tr>
			<tr>
				<td>Expiry date:</td>
				<td><input type="text" name='textexpdate' required></td>
			</tr>
			<tr>
				<td>Price:</td>
				<td><input type="text" name='texprice' required></td>
			</tr>
			<tr>
				<td>Currency:</td>
				<td><input type="text" name='textcurr' required></td>
			</tr>
			<tr>
				<td>EAN code:</td>
				<td><input type="text" name='textean' required></td>
			</tr>
			<tr>
				<td>Weight:</td>
				<td><input type="text" name='textweigth' required></td>
			</tr>
			<tr>
				<td>Weight unit:</td>
				<td><input type="text" name='textweightuni' required></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value='Save'></td>
			</tr>
		</table>
	</form>


</body>
</html>