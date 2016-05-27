<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add new product</title>
</head>
<body>
	<h2 align="center">Update product</h2>
	<form method="post" action='<?php echo site_url('product/saveupdate'); ?>'>
		<table border="0" cellspacing="0" cellpadding="0" width="500" align="center">
			<tr>
				<td>ID:</td>
				<td><input type="text" name='textid' value="<?php echo $r->id ?>"></td>
			</tr>
			<tr>
				<td>Name:</td>
				<td><input type="text" name='textname' value="<?php echo $r->name ?>"></td>
			</tr>
			<tr>
				<td>Description:</td>
				<td><textarea name="textdesc" ><?php echo $r->description ?></textarea></td>
			</tr>
			<tr>
				<td>Production date:</td>
				<td><input type="text" name='textproddate' value="<?php echo $r->production_date ?>"></td>
			</tr>
			<tr>
				<td>Expiry date:</td>
				<td><input type="text" name='textexpdate' value="<?php echo $r->expiry_date ?>"></td>
			</tr>
			<tr>
				<td>Price:</td>
				<td><input type="text" name='texprice' value="<?php echo $r->price ?>"></td>
			</tr>
			<tr>
				<td>Currency:</td>
				<td><input type="text" name='textcurr' value="<?php echo $r->currency ?>"></td>
			</tr>
			<tr>
				<td>EAN code:</td>
				<td><input type="text" name='textean' value="<?php echo $r->ean_code ?>"></td>
			</tr>
			<tr>
				<td>Weight:</td>
				<td><input type="text" name='textweigth' value="<?php echo $r->weight ?>"></td>
			</tr>
			<tr>
				<td>Weight unit:</td>
				<td><input type="text" name='textweightuni' value="<?php echo $r->weight_unit ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value='Save' ></td>
			</tr>
		</table>
	</form>


</body>
</html>