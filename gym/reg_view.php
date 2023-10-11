<?php include("conn.php"); ?>

<!DOCTYPE HTML>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.slider').bxSlider({
                autoStart: true
            });
        });
    </script>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
        }

        img {
            max-width: 100%;
        }

        #navigation {
            float: right;
        }

        #navigation ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        #navigation ul li {
            padding: 10px 30px;
            line-height: 50px;
            text-align: center;
            float: left;
            color: black;
        }

        #navigation ul li a {
            color: #fff;
            text-decoration: none;
        }

        .logo {
            float: left;
            padding: 8px 0 0 20px;
        }
        .client_list {
            background:#FFF; 
            width:100%;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        .client_list li {
            display: inline-block;
            width: 32%;
            padding: 5px;
        }
        .client_list li h3 {
            color:#fc6951;
            font-size: 18px;
        }
		.gallary_list {
            background:#FFF; 
            width:100%;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        .gallary_list li {
            float: left;
            width: 32%;
            padding: 5px;
        }
		.gallary_list li img {
			float: left;
			height: 200Px;
			width: 100%;
		}
        .gallary_list li h3 {
            color:#fc6951;
            font-size: 18px;
        }


        .slider_panel {
            width: 100%;
            float: left;
        }

        .slider_panel .bx-wrapper .bx-pager,
        .bx-wrapper .bx-controls-auto {
            bottom: 40px;
        }

        .slider_panel .bx-wrapper .bx-pager.bx-default-pager a:hover,
        .slider_panel .bx-wrapper .bx-pager.bx-default-pager a.active,
        .slider_panel .bx-wrapper .bx-pager.bx-default-pager a:focus {
            background:#fc6951;
        }

        .slider_panel .bx-wrapper {
            border: 0 none;
            margin: 0;
            box-shadow: none;
        }

 .slider_panel .bx-wrapper .bx-pager.bx-default-pager a {
            background: #fff;
        }
        .fitness_first {
    text-align: center;
    color: #fff;
    font-size: 30px;
    margin: 20px 0 0;
    background:#fc6951;
    padding: 13px 10px 10px 10px;
	width:100%;
	display : inline-block;
}

.fitness_first span {
    display: block;
    font-size: 18px;
    margin: 5px 0;
}
.introduction {
	text-align:center;
	padding:20px;
	overflow: hidden;
	border: 1px solid #000;
    margin: 20px auto 0px;
     
    max-width: 90%;
}
    </style>
    <title>ANY TIME WORKOUT</title>
</head>
<body>
<div>
        <div style="background:#fc6951; width:100%; overflow:hidden;">
            <div class="logo"> <img src="images/logo-icon.png" />
            </div>
            <div id="navigation">
                <ul>
                     <li><a href="Home.html">HOME</a></li>
                    <li><a href="Aboutus.html">ABOUT US</a></li>
                    <li><a href="Gallary.html">GALLARY</a></li>
                    <li><a href="registration.php">REGISTRATION</a></li>
                    <li><a href="login.php">LOGIN</a></li>
                    <li><a href="contect us.html)">CONTACT US</a></li>
                </ul>
            </div>

        </div>
        
    </div>


<br>
<br>
<br>
<br>
<br>
<br>





<table width="100%" border="2" cellspacing="0" cellpadding="0" bordercolor="#CC6600" bordercolordark="#99FF99" radius-border="5px" >
  <tr>
    <td><strong>S.No</strong></td>
    <td><strong>First name</strong></td>
    <td><strong>Last Name</strong></td>
    <td><strong>User </strong></td>
    <td><strong>Password</strong></td>
    <td><strong>Email </strong></td>
    <td><strong>Coutry </strong></td>
    <td><strong>Genter</strong></td>
    <td><strong>DOB</strong></td>
    <td>Delete</td>
  </tr>
 <?php
 $x=1;
 $sql_view="select * from registration order by fname asc  ";
$rs_check = mysqli_query($conn_link,$sql_view) or die(mysqli_error($conn_link));;
while($result=mysqli_fetch_array($rs_check))
{
 
 
 ?>
  <tr>
    <td><?php echo $x?></td>
    <td><?php echo $result['fname']?></td>
    <td><?php echo $result['lname']?></td>
    <td><?php echo $result['uname']?></td>
    <td><?php echo $result['password']?></td>
    <td><?php echo $result['email']?></td>
    <td><?php echo $result['contry']?></td>
    <td><?php echo $result['gender']?></td>
    <td><?php echo $result['dob']?></td>
    <td>&nbsp;</td>
  </tr>

<?php
$x++;

 }?>

</table>
<br>
<br>
<div class="bottom_button" align="center" > 
<a href="Home.html" class="back_button">Home </a>
</div>
<br>
<br>
<br>
<br>
<br>
<br>

 <div class="fitness_first">FITNESS FIRST INDIA ON INSTAGRAM <span>Follow us on Instagram for tips, inspiration and the latest happenings in our clubs.</span></div>
</body>
</html>