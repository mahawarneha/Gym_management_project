<?php

?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>

.login_container{
	background:#fff;
	border:#333 4px solid;
	margin:8% auto 0;
	width:35%;
	padding:30px;
	box-sizing: border-box;
	box-shadow: 0px 0px 15px 15px rgba(0,0,0,0.3);	
	border-radius: 10px;

}
.login_form {
 text-align:center;
	
}
.login_form h2{
	margin: 15px;
	text-align:center;
	color:#00C;
}
.login_form label {
	width: 50px;
	float:left;
	
}
.submit{

 background-color:#0099CC;
	 color: #FFF;
	 padding:4px 6px ;
	margin-center:40%;
}




</style>

<title>login</title>
</head>

<body bgcolor="#FA8072">
<div class="login_container">





<?php 
if(!empty($_REQUEST['status']))
{
if($_REQUEST['status']==2)
{
echo "User or password are invaild ";
}
}?>

<form class="login_form"  action="login_view.php" method="get">

<h2><b><u>LogIn</u></b></h2><br>
<label><b>Username:</b></label><input type="text" placeholder="Usernam" class="login_input" required="required" name="uname"><br><br>

<label><b>Password:</b></label><input type="Password" class="login_input1" placeholder="Password" name="pwd" required="required"><br><br>
<button type="submit" class="submit">Submit</button>

</form>
<a href="Home.html">Home</a>

</div>
</body>
</html>
