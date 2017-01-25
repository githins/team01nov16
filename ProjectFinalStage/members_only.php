<?php
  session_start();

  echo "<h1>Members only</h1>";

  // check session variable

  if (isset($_SESSION['valid_user']))
  {
    echo "<p>You are logged in as " . $_SESSION['valid_user'] . "</p>";
    echo "<p>Members only content goes here</p>";
	echo "<a href=\"logout.php\">Logout</a>";
  }
  else
  {
    echo "<p>You are not logged in.</p>";
    echo "<p>Only logged in members may see this page.</p>";
	echo "<a href=\"login.php\">Login page</a>";
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
