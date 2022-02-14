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

.button1  {
	padding: 7px 25px;
	background-color: #3399ff;
	color: black;
	cursor: pointer;
	border: 1px solid #003366;
	border-radius: 10px;
    font-size: 17px;}

#wrap{
	width: 1px;
}	
.left{
	height: 380px;
	margin-top: 15px;
	float: left;
	position:relative;
	margin-left: 1%;
	
}
.right{
	height: auto;
	margin-top: 20px;
	//float: right;
	width: auto;
	position:relative;
	//margin-right: 6%;
	text-align: center;
}
.divaccount{
	float: right;
}
ul#ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #3399ff;
	border-radius: 10px;
	border: 1px solid #003366;
}
li a:hover, .dropaccount:hover .drop_conaccount {
    background-color: red;
	border-radius: 5px;
}
li a, .drop_conaccount{
    display: inline-block;
    text-align: center;
    padding: 5px 20px;
    text-decoration: none;
	font-weight:bold;
}
a#fontcolor {
     color: black;
}
li.dropaccount {
    display: inline-block;
}
.drop_ulaccount {
    display: none;
    position: absolute;
    background-color: #3399ff;
	border-radius: 10px;
    //min-width: 160px;
}
.drop_ulaccount a {
    color: black;
    padding: 4px 6px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.drop_ulaccount a:hover {
	background-color: white;
	}

.dropaccount:hover .drop_ulaccount {
	display: block;
}
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   height: 6%;
   background-image: url("b1.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
   //background-color:  #0066ff;
   //color: white;
   text-align: center;
}

    </style>
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
        <li><a href="feedback.html">Feedback</a></li></ul></li></ul>
<div class="divaccount">
<ul id="ul">
<li class="dropaccount"><a href="#" id="fontcolor"class="drop_conaccount"><span>Account</span></a>
<ul class="drop_ulaccount">
	<li><a href="login.php">Login</a></li>
        <li><a href="loginadvertise.php">Advertise Login </a></li>
        <li><a href="signup.html">Sign Up</a></li></ul></li></ul></ul></div>
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

//connect to server
$connect=mysqli_connect($server,$user,$password,$database) or die('could not connect');
//connect to database
//Capture Data
if(isset($_POST['submit'])){
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$email = $_POST['conemail'];
$conemail = $_POST['email'];
$phone = $_POST['phone'];
$user_name = $_POST['user_name'];
$pass = $_POST['pass'];
$repass = $_POST['repass'];
$gender = $_POST['gender'];

//query to database
//echo "test";
$query ="INSERT INTO user_customer (fname,mname,lname,email,conemail,phone,user_name,pass,repass,gender)
VALUES('$fname','$mname','$lname','$email','$conemail',$phone,'$user_name','$pass','$repass','$gender')";
}

if(mysqli_query($connect, $query)){
	echo "<br>";
	echo "<center><b>You have been signup successfully.</b></center>";
}
else{
	echo "Error: " .$query. "<br>" . mysqli_error($connect);
}
mysqli_close($connect);
?>
<div class="footer">
  <p>Footer</p>
  <i style="font-size:24px" class="fa">&#xf08c;</i>
</div>
</body></html>
