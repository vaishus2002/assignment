<?php
$firstname=$_REQUEST['firstname'];
$lastname=$_REQUEST['lastname'];
$email=$_REQUEST['email'];
$dob=$_REQUEST['dob'];
$password=$_REQUEST['password'];
$conpassword=$_REQUEST['conpassword'];



$conn=mysqli_connect("localhost","root","","intern");
$q="insert into assignment values('$firstname','$lastname','$email','$dob','$password','$conpassword')";
$result=mysqli_query($conn,$q);
if($result)
{
	echo "<script>alert
    ('CONGRAJULATIONS!!! YOU ARE SUCCESSFULLY REGISTERED PLEASE LOGIN TO CONTINUE');window.location='login.html'</script>";
}else{
	echo "<script>alert('Fail To insert, please try again');window.location='index.html';</script>";}
?>
