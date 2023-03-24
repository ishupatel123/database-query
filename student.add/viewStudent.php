<html>
	<head>
		<title> View ATTD</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		</head>
	<body>
	<div class="container mt-2">
		<form action="viewStudent.php" method="post">
			<div class="row">
		<select name="stream" class="form-control">
			<option value="BCA">BCA</option>
			<option value="BBA">BBA</option>
			<option value="MCA">MCA</option>
		</select>
		</div><br>
		<div class="row">
		<select name="sem"  class="form-control">
			<option value="2">2</option>
			<option value="4">4</option>
			<option value="6">6</option>
		</select>
		</div><br>
		<div class="row">
		<select name="divs"  class="form-control">
			<option value="A">A</option>
			<option value="B">B</option>
			<option value="C">C</option>
		</select>
		</div><br>	
			<input type="submit" class="btn btn-success form-control" value="ADD ATD" name="sbt">
		</form>
			<?php 
				if(isset($_REQUEST['sbt']))
				{
					include "config.php";
					$crs=$_REQUEST['stream'];
					$sem=$_REQUEST['sem'];
					$div=$_REQUEST['divs'];
					$sql="select * from `student` where `strm`='$crs' and `division`='$div' and `sem`='$sem'";
					$res=mysqli_query($con,$sql);
					$count=mysqli_num_rows($res);
					?>
					<input type="hidden">
					<form action="addAtd.php" method="post">
					<input type="hidden" name="stream" value="<?php echo $crs; ?>">
					<input type="hidden" name="sem" value="<?php echo $sem; ?>">
					<input type="hidden" name="divs" value="<?php echo $div; ?>">
						<table class="table " border="1">
							<tr>
								<th> SR No.
								<th> Name
								<th colspan="2"> ATTENDANCE
					<?php
					
					if($count>0)
					{
						$i=1;
						while($row=mysqli_fetch_assoc($res))
						{
							
							$idd=$row['id'];
							$nmm=$row['name'];
							?>
							<tr>
								<td> <?php echo $i++; ?>
								<td> <?php echo $nmm; ?>
								<td><input type="radio" name="atd<?php echo $idd;?>" value="p">P
								<td><input type="radio" name="atd<?php echo $idd;?>" value="a">A
								
						<?php }
						echo '<tr>
						<td colspan="4"> <input type="submit" class="btn btn-primary form-control" name="atdAdd">' ;
					}
					else
					{
						echo "<tr> <th colspan='4'>NO Records Available";
					}
				?>
					
					</table>
					</form>
				<?php
				}
			?>
		</div>