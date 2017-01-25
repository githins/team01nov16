<?php
  session_start();
  if(isset($_SESSION['valid_user']))
  {
  	$old_user = $_SESSION['valid_user'];  // store  to test if user *was* logged in
  	unset($_SESSION['valid_user']);		// free session var valid_user 
  }
  else
  	$old_user = "";

  if (!empty($old_user))	//user logged in
  {
    if (isset($_SESSION['valid_user']))	//if valid_user still exist
	// user was logged in and could not be logged out
    {
	  echo "<html>";
	  echo "<body>";
	  echo "<h1>Log out</h1>";
      echo "Could not log you out.<br>";
    } 
	else //valid_user not exist
	{
	  echo "<html>";
	  echo "<body>";
	  echo "<h1>Log out</h1>";
      echo "$old_user, <br>  ";
	   echo "YOU LOGGED OUT SUCCESSFULLY.<br>";
	}
  }
  else //not logged in
  {
	  echo "<html>";
	  echo "<body>";
	  echo "<h1>Log out</h1>";
    // if user was not logged in but came to this page somehow
    echo "YOU ARE NOT LOGGED IN <br>"; 
  }
  echo '<a href="login.php">Back to login page</a>';
  echo '</body>';
  echo '</html>';
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

