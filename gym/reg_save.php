<?php include("conn.php"); ?>
<?php
$fname = $_REQUEST['fname'];
$lname = $_REQUEST['lname'];
$username = $_REQUEST['username'];
$password = $_REQUEST['pwd'];
$email = $_REQUEST['email'];
$country = $_REQUEST['country'];
$gender = $_REQUEST['gender'];
$dob = $_REQUEST['dob'];
  

$sql_check="select * from registration where uname='$username'";
$rs_check = mysqli_query($conn_link,$sql_check) ;

$num_check= mysqli_num_rows($rs_check);

if($num_check==0)
{
 $sql_add ="insert into registration(fname,lname,uname,password,email,country,gender,dob)values ('$fname','$lname','$username','$password','$email','$country','$gender','$dob')";

mysqli_query($conn_link,$sql_add) or mysqli_error($conn_link);
header("location:registration.php?status=2");
exit();
//echo "Your Registration is successfully done";
}
else
{
//echo "User name is already exist";
header("location:registration.php?status=1");
exit();
}
?>