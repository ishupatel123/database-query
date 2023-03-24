<html>
	<head>
		<title>ADD STUDENT</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="container mt-3">
		<form action="insStd.php" method="post">
		<div class="row">
		<input type="text" name="nm" class="form-control" placeholder="Enter Full Name">
		</div><br>
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
		<div class="row">
		<input type="text" name="mobile"  class="form-control" placeholder="Enter Mobile No"></div><br>
		<div class="row ">
		<div class="col-sm-6">
		<input type="submit" class="btn btn-success form-control" value="ADD STUDENT" name="sbt">
		</div>
				<div class="col-sm-6">
		<input type="RESET" class="btn btn-danger form-control" value="RESET" >
		</div>
		</div>
		<a href="viewStudent.php">CLICK HERE TO VIEW ATTENDANCE </a>
		</form>
		</div>
	</body>
</html>