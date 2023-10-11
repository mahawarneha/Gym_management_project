<?php include("conn.php"); ?>
<?php
$pwd = $_REQUEST['pwd'];
$uname = $_REQUEST['uname'];

$sql_view="select * from admin where uname='$uname' and password='$pwd'  ";
$rs_check = mysqli_query($conn_link,$sql_view) or die(mysqli_error($conn_link));;

$num=mysqli_num_rows($rs_check);

if($num>=1)
{
header("location:reg_view.php?status=1");
exit();
}


header("location:login.php?status=2");
exit();

?>

