<?php include'dbc.php';

	$cate=$_GET['vl'];
		$query=mysqli_query($conn,"select * from tbl_subcategory where category_id='$cate' and status='1'");
		echo "<select>";
		echo "<option>-select-</option>";
		while($row=mysqli_fetch_assoc($query))
			{
		    $scid=$row['id'];
			$scname=$row['name'];
			
			 ?>
			 <option value="<?php echo $scid; ?>"> <?php echo $scname; ?></option>

			 <?php } ?> 