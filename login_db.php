
<?php 
session_start();
$conn=mysqli_connect("localhost","root","","intern");

if(isset($_REQUEST["btn"]))
{
    $email=$_REQUEST["email"];
   /* $_SESSION['un1']=$email;*/
    $password=$_REQUEST["password"];
    $res="select * from assignment where email='$email' && password='$password'";
    $query=mysqli_query($conn,$res);
    $rowcount=mysqli_num_rows($query);
    if($rowcount==true)
    {
        echo"<script>window.location='final.html'</script>";
    }
    else
    {
        echo "<script>alert('Incorrect UserName Or Password');window.location='login.html'</script>";
    }
}

?>
