<!DOCTYPE html>
<html >
<head>
<meta charset="utf-8">
	<title>Searching</title>
	<meta name="author" content="Ralph Phillips">
        <link rel="stylesheet" media="screen" href="assets/css/style.css" />
</head>
<body>
<div class="bg">
<h1 id='hd'>LandProperty.com.my</h1><p id="tr1">Find Land for buying and sale</p></div>
<hr id='hr1'>

<ul>
<li><a href="home.php">Home</a></li>
<li><a href="buying.html">Buying</a></li>
<li><a href="sell.html">Sell</a></li>
<li><a href="waqf.html">Waqf</a></li>
<li><a href="advertise.html">Advertising</a></li>
<li><a href="report.html">Reporting</a></li>
<li class="dropdown"><a href="#" class="dropbtn">Contact</a>
	<ul class="dropdown-content">
	<li><a href="servise.html">Servise</a></li>
        <li><a href="contact.html">Address</a></li>
        <li><a href="feedback.html">Feedback</a></li></ul></li>
</ul>
<div class='but'>
<button  class="button" onclick="location.href='signup.html';" >Register</button>
<button class="button" onclick="location.href='login.php';" >Login</button>
</div>
<div class='tr'><br>
<h2 align="center" >List of lands availbe for sell according to your search</h2>
<br>
<?php
$server='localhost';
$user='fyp';
$password='fyp';
$database='fyp';

$connect=mysqli_connect($server,$user,$password,$database) or die('could not connect');
//connect to database
//echo"try aagin";
//Declare variables
$out = '';
$type = $_POST['top'];
$min_price = $_POST['mip'];
$mix_price =$_POST['mxp'] ;
$size ;
//Collecting Data
if(isset($_POST['search']) &&$_POST['search'] !=" "){
	//$searchq = $_POST['search'];
	$searchq = preg_replace('#[^a-z 0-9?!]#i',' ', $_POST['search']);
	//if($_POST['top'] ==

	}

	$query = "SELECT * FROM land WHERE type ='$type' and price <= '$mix_price' and price >= '$min_price'";
	$query= mysqli_query ($connect, $query);

while ($row = mysqli_fetch_array($query)) {
	//echo $row['land_id'];
	$x = $row['land_id'] ;
	//echo "<h2>The Property listed below are the one you look for<h2>";

	echo $row['type'] ;
	echo "  ";
	echo $row['price'] ;
		echo "  ";
	echo $row['country'] ;
	echo "  ";
	echo $row['city'] ;
	echo "  ";
	echo $row['size'] ;
	echo "<br>";
}
/*	$result = mysqli_fetch_array($connect, $query)or die("SQL ERROR");
	$count = mysqli_num_rows($result);
	if($count == 0){
		$out = 'There was not any search result';
	}
	else{
		$info = mysqli_fetch_array($resut);
		$type = $info['type'];
		$min_price = $info['min_price'];
		$mix_price = $info['mix_price'];
		$size = $info['size'];

		//$out .= '<div>'.$type.' '.$min_price.' '.$mix_price.' '.$size.'</div>';
		}
	*/
?>

<br/><br/><br/><br/><br/><br/><br/><br/><br/>
</div>
<div class="footer">
  <p>Footer</p>
  <i style="font-size:24px" class="fa">&#xf08c;</i>
</div>
</body></html>
