<!DOCTYPE html>
<html >
<head>
<meta charset="utf-8">
	<title></title>
	<meta name="author" content="Ralph Phillips">
        <link rel="stylesheet" media="screen" href="assets/css/style.css" />
		
 <style>
* {
		margin: 0px;
		padding: 0px;}
body {
		background-color:lightblue;
}
div.bg{
    background-image: url("light-blue-.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;}
h1#hd {
		text-align: center;
        height: 35px;}
p#tr1{
		text-align: center;
		margin-top: 5px;}
hr#hr1{
    background-color: #040475;
    border: solid 4px white;
    height: 1px ;
    margin: 0;
	padding: 0;}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}
li {
    float: left;
}
li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 10px 30px;
    text-decoration: none;
	font-weight:bold;
}
li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}
li.dropdown {
    display: inline-block;
}
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
}
.dropdown-content a {
    color: black;
    padding: 4px 6px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
	background-color: #dbd4d4}

.dropdown:hover .dropdown-content {
    display: block;
}  
table#tb{
    border: solid 2px white;
    width: 400px ;
	height: 350px;
	margin-top: 3px;
	margin-left: 10%;
	position: fixed;
}
input[type=text]{
	width: 300px;
	height: 25px;}
.button1  {
    font-size: 17px;}

    </style>
</head>
<body>
<div class="bg">
<h1 id='hd'>LandProperty.com.my</h1><p id="tr1">Find Land for buying and sale</p></div>
<hr id='hr1'>
<div class='pag'>
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
</ul></div><br>
<?php
/*
$server='1228472.iium.acme.my';
$user='1228472_salwa';
$password='Z2zNg1xSRH';
$database='1228472_db';
//user 1228472_salwa pass Z2zNg1xSRH
*/

$server='localhost';
$user='fyp';
$password='fyp';
$database='fyp';

$connect=mysqli_connect($server,$user,$password,$database) or die('could not connect');
//connect to database
//Capture Data
if(isset($_POST['submit'])){
$type = $_POST['type'];
$min_price = $_POST['min_price'];
$mix_price = $_POST['mix_price'];
$country = $_POST['country'];
$city = $_POST['city'];
$size = $_POST['size'];

//query to database
echo "hh";
$query ="INSERT INTO land (type,min_price,mix_price,country,city,size)
VALUES('$type',$min_price,$mix_price,'$country','$city','$size')";
}

if(mysqli_query($connect, $query)){
echo "You have been signup successfully.";
}
else{
	echo "Error: " .$query. "<br>" . mysqli_error($connect);
}

mysqli_close($connect);
?>
</body></html>
