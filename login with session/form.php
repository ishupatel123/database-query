<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
<h2>Login Form</h2>

<div class="container">
  <form action="form.php" method="POST">
    <div class="row">
      <div class="col-25">
        <label for="fname">Username:</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="unm" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Password:</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="pwd">
      </div>
    </div>
    <div class="row">
      <input type="submit" name="btnsubmit" value="Login">
    </div>
  </form>
</div>
</body>
</html>
<?php
require "config.php";
if(isset($_POST['btnsubmit']))
{
	$unm = $_POST['unm'];
	$pwd = $_POST['pwd'];
	$sql = "SELECT * FROM `login` WHERE `unm`='$unm' AND `pwd`='$pwd'";
	$result = mysqli_query($con,$sql);
	$data = mysqli_fetch_assoc($result);
	$count = mysqli_num_rows($result);

	if($count > 0)
	{
		session_start();
		$_SESSION['id']=$data['id'];
		$_SESSION['unm']=$data['unm'];
		header("location:dashboard.php");
	}
	else
	{
		echo "<script>alert('Check Your Username & Password!');</script>";
	}
}
?>