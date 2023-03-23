<html>
<body>
<form action="upload.php" method="POST" enctype="multipart/form-data">

    <h1>Add Staff Details</h1>
    <hr>
    <label for="name"><b>Name:</b></label>
    <input type="text" placeholder="Enter Name" name="name" required>
    <label for="email"><br>email:</b></label>
    <input type="email" placeholder="Enter email address" name="email" id="qualification" required>
    <label for="password"><b>password:</b></label>
    <input type="password" placeholder="Enter password" name="password" id="password" required>
	<br>
	<label for="contact"><b>contact:</b></label>
    <input type="contact" placeholder="Enter contact no" name="contact" id="contact" required>
	<br><label for="photo"><b>Photo:</b></label>
    <input type="file" placeholder="Upload Photo" name="photo" id="photo" required>
	<br>
    <button type="submit" class="registerbtn">Submit</button>
</form>
</body>
</html>