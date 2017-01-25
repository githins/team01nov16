
<?php
//must appear BEFORE the <html> tag

session_start();
include_once('config.php');	

if( isset($_POST["email"])&& isset($_POST["email"]) )
{
	$email = $_POST["email"];
		
	$password = $_POST["password"];
	
	if ($email && $password)
	{
	  // if the user has just tried to log in
	
	  //make the database connection
	  $conn  = db_connect();	
	  
	  //make a query to check if user login successfully
	  $sql = "select * from users where email='$email' and password='$password'";
	  $result = $conn -> query($sql);
	  $numOfRows = $result -> num_rows;

	  if ($numOfRows)
	  {
		// login successfully, keep the user's email
		$_SESSION['valid_user'] = $email;
	  }
	  $conn -> close();
	}
}
if (isset($_SESSION['valid_user']))
{
  header("location: members_only.php");  
}
else
{
  if (isset($email))
  {
    // if user tried and failed to log in
    echo "<b>Incorrect - Please try it again </b><br>";
	echo "<a href=\"registration.html\">Sign-up</a><br>";
  }
  else 
  {
    // user has not tried to log in yet or has logged out
    echo "<b>You are not logged in</b><br>";
  }

  // provide form to log in: same page for action  
  echo "<form method=post action=\"login.php\">";
  echo "<table>";
  echo "<tr><td>Email</td>";
  echo "<td><input type=text name=email></td></tr>";
  echo "<tr><td>Password:</td>";
  echo "<td><input type=password name=password></td></tr>";
  echo "<tr><td colspan=2 align=center>";
  echo "<input type=submit value=\"Log in\"></td></tr>";
  echo "</table></form>";
}

?> 


<html>
<head>
<title>Kao-Pio Restautrant</title>
<link href="http://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister" rel="stylesheet" type="text/css">
<link href="main.css" rel="stylesheet">
<link href="responsive.css" rel="stylesheet" media="screen and
(max-width: 960px)">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">

</head>
<body>
<div class="wrapper">


<header><h1 align="center" style="color:#FFFFFF" >Kao-Pio </h1></header>

<nav>
			<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href=" menu.html">Menu</a></li>
			<li><a href="registration.html ">Registration</a></li>
             <li><a href="search.php ">Search</a></li>
            <li><a href="login.php">Login</a></li>
			<li><a href="aboutus.html">About</a></li>
			</ul>
		
</nav>

<section id="col1">

<p>

<br/>
<br/>
<br/>
<br/>

 </p>
</section>



<footer><h3 align="center" style="color: #ED370E">FOR HOME DELIVERY CALL US 0477089095</h3>
</footer>
</div>
<div class="footer"> 
<a href="https://www.facebook.com/" >
<img align= "Right" title="FACEBOOK" alt="Social" src="facebook.png" >
</a>
<a href="http://twitter.com">
<img align= "Right" title="TWITTER" alt="Social" src="twitter.png" >
</a> @2016 Kaopio.com.au All Rights Reserved 
<strong>Powered By Team01Nov16 </strong>.</div>
</body>
</html>
