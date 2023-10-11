<?php
include("conn.php");

$pwd = $_REQUEST['pwd'];
$uname = $_REQUEST['uname'];

$sql_check="select * from registration where uname='$uname' and password='$pwd'";
$rs_check = mysqli_query($conn_link,$sql_check) ;

$num_check= mysqli_num_rows($rs_check);

if($num_check==0)
{
echo "invalid user / password ";
}
else
{
echo "You are login successfully ";	
}
?>