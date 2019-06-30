<!DOCTYPE html>
<html>
<head>
	<title>University of Michigan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" language="javascript" src="javascripts/jquery.js"></script>
	<script  type="text/javascript" language="javascript" src="javascripts/validatelogin.js"></script>
	<link rel="stylesheet" type="text/css" href="CSS/login.css">
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<body>
	<header class="header">
		<table><tr>
			<div>
			<td><img src="images/michiganLogo.png" style="width:50px;height:50px;"></td>
			<td><h1 style = "color: red;font-size: 150%;">University of Michigan</h1></td></div>
			 <div class="login"><a href="index.php" style="font-size: 20px;color: white;"> HomePage</a>
            </div>
		</tr></table>
	</header>

	<br><br>
	<center>
	<div class="form">
	<form id="myForm" action="login.php" method="post" >
	<h2 style = "color: black;text-align: center ; font-size: 250%;">Login</h2>
	<table style="background-color: White">							
    <tr><th>UserName:</th><td><input type="text" id="name" name="uname" placeholder="Enter your username" required></td><td><span class="error_form" id="name_error_message"></span></td> </tr>
	<tr><th>Password:</th><td><input type="password" id="passd" name="upass" placeholder="Enter your password" required></td><td><span class="error_form" 
		id="pass_error_message"></span></td></tr>
	</table>
	<br><br>
	<button type="submit" name="submit_login" style="background-color: lightBlue;text-align: center; font-size: 20px;width:200px;margin-left: 25px;">continue</button>
	</form>
	</div>
	</center>
	<div style="height: 225px;"></div>
	 <footer class="footer">
        <table><tr><div>
        <td>
            <img src="images/footerimage.jpg" style=" width:80px;height: 80px;">
        </td>
        <td>
            <h5 style="color: white;">© 2019 The Regents of the University of Michigan<br> 500 S. State Street, Ann Arbor, MI 48109 USA<br></h5>
        </td>
        <td>
            <address>
            <a href="tel:9954822536" style="color: White;"><img src="images/phone.png" style="width:15px;height: 15px;">: 9954822536</a><br><br>
            <a href="https://bit.ly/2tRzDj5" style="color: White;"><img src="images/mail.jpg" style="width:15px;height: 15px;">: rajatstms@gmail.com</a><br></address>
        </td>
        </div></tr>
        </table>
    </footer>

</body>
</html>
<?php
//include_once 'connection.php';

	 if (isset($_POST['submit_login'])) {  
    extract($_POST);  
    $servername = "localhost";  
    $username   = "root";  
    $password   = "";  
    $dbname     = "News";  
    // Create connection  
    $conn       = new mysqli($servername, $username, $password, $dbname);  
    // Check connection  
    if ($conn->connect_error) {  
        die("Connection failed: " . $conn->connect_error);  
    }  

	$username = mysqli_escape_string($conn,$_POST['uname']);
    $userpass = mysqli_escape_string($conn, $_POST['upass']);
    

    $query = "SELECT * FROM login where uname='$username' and upass='$userpass'" ;


    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result)){
    	header('Location: news.php');
    }
    else{
    	echo "Invalid credentials";
    }
}
?>