
<?php
	if(isset($_REQUEST['sbt']))
	{
		include "config.php";
		$eml=$_REQUEST['e'];
		$pwd=$_REQUEST['psd'];
		$sql="select * from `tst` where `email`='$eml' and `password`='$pwd'";
		
		$res=mysqli_query($con,$sql);
		if(mysqli_num_rows($res)>0)
		{
			?>
			<table border="1">
				<tr>
					<td> No
					<td>Name
					<td> POINT
			<?php
			$row=mysqli_fetch_assoc($res);
			$ref=$row['ref'];
			//echo $ref;
			$i=1;
			$p_amt=0;
			$refSql="select * from `tst` where `ref_by`='$ref'";
			$res1=mysqli_query($con,$refSql);
			while($row1=mysqli_fetch_assoc($res1))
			{
				$p_amt+=$row1['point'];
				?>
				<tr>
					<td><?php echo $i++; ?>
					<td><?php echo $row1['name']; ?>
					<td><?php echo $row1['point'];?>
				<?php
			}
			?>
			
				<tr>
					<td colspan="2">TOTAL
					<td> <?php echo $p_amt; ?>
			<?php
		}
	}
	else
	{
		header("location:login.php");
	}
?>