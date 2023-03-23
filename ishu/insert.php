<?php
    include "config.php";
    $fnm=$_REQUEST['fnm'];
    $lnm=$_REQUEST['lnm'];
    $email=$_REQUEST['email'];
    $psw=$_REQUEST['psw'];
    $contact=$_REQUEST['contact'];
    $course=$_REQUEST['course'];
    $city=$_REQUEST['city'];
    $insert="INSERT INTO `login`(`fnm`, `lnm`, `email`, `psw`, `contact`, `course`, `city`) VALUES ('$fnm','$lnm','$email','$psw','$contact','$course','$city')";
$result=mysqli_query($con,$insert);
header("location:form.php");

?>