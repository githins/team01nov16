
<?php
include_once('book_functions.php');

echo "<html>";
echo "<head><title>Search MENU</title></head>";
echo "<body>";
echo "<h1>Search MENU</h1>";
echo "<form method=post action=\"search.php\">";
echo "<table>";
echo "<tr><td>Title:</td>";
echo "<td><input type=text name=title></td>";
echo "<td><input type=submit value=\"Go\"></td></tr>";
echo "</table></form>";

//if user clicks the submit button
if( isset($_REQUEST["title"]) )
{
	$title = $_REQUEST["title"];
	//make the database connection
	$conn  = db_connect();
	
	//create a query: find books by a title or a part of title 
	$sql = "SELECT title,price FROM menu ";
	$sql = $sql . " WHERE title like '%$title%' ";
	$sql_result = $conn -> query($sql);
	$row1= mysqli_fetch_assoc($sql_result);
	$conn -> close();
	echo "<h1>Search Results</h1>";
	/*display_books($sql_result);*/
	echo "\n<h3> ITEM ";
     echo $row1['title']; 
	 echo "\n<h3> PRICE ";
	 echo $row1['price'];
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
<a href="" >
<img align= "Right" title="Social Media link" alt="Social" src="images.jpeg" >
</a> @2016 Kaopio.com.au All Rights Reserved 
<strong>Powered By Team01Nov16 </strong>.</div>
</body>
</html>
