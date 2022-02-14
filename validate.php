<!DOCTYPE html>
<html >
<head>
<meta charset="utf-8">
	<title></title>
	<meta name="author" content="Ralph Phillips">
        <link rel="stylesheet" media="screen" href="assets/css/style.css" />
		<script type="text/javascript">
function reset(){
  document.getElementById("fname").value="";
  document.getElementById("mname").value="";
  document.getElementById("lname").value="";
  document.getElementById("email").value="";
  document.getElementById("conemail").value="";
  document.getElementById("phone").value="";
  document.getElementById("user_name").value="";
  document.getElementById("pass").value="";
  document.getElementById("repass").value="";
}

    function validateForm()
    {
        var fn =document.getElementById("fname").value;
		var mn =document.getElementById("mname").value;
        var ln =document.getElementById("lname").value;
        var e =document.getElementById("email").value;
		var cone =document.getElementById("conemail").value;
        var ph =document.getElementById("phone").value;
		var u =document.getElementById("user_name").value;
        var p =document.getElementById("pass").value;
        var rp =document.getElementById("repass").value;
		var letter = /^[a-zA-Z]+$/;
		var pas =  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,20}$/;   //  numric n special char 
		if(fn == null || fn ==""   ){
		alert(" First Name is required");
            return false;
		}
		if(mn == null || mn ==""   ){
		alert(" Middle Name is required");
            return false;
		}
		if(ln == null || ln ==""){
		alert(" Last Name is required");
            return false;
		}
		if(e == null || e ==""){
		alert(" Email is required");
            return false;
		}
		if(cone == null || cone ==""){
		alert(" Confirm Email");
            return false;
		}
		if(Form.email.value !="" && Form.email.value != Form.conemail.value){
		alert("Email Confirmation does not match ");
		return false;
		}
		if(ph == null || ph ==""){
		alert(" Phone is required");
            return false;
		}
		if(u == null || u =="" ){
		alert(" User name is required");
            return false;
		}
		
		if(p == null || p ==""){
		alert(" Password is required");
            return false;
		}
		if(rp == null || rp =="" ){
		alert(" Please Confirm the Password");
            return false;
		}
		if(!Form.pass.value.match(pas)){
		alert("Please Match Requirments");
		return false;
		}
		if(Form.pass.value !="" && Form.pass.value != Form.repass.value){
		alert("Password confirmation does not match");
		return false;
		}
		if((Form.gender[0].checked == false ) && (Form.gender[1].checked == false)){
            alert("Please choose your Gender: Male or Female");
			return false;
		}
		if(document.getElementById("CheBox").checked == false){
        //var ch =document.getElementById("CheBox").value;
		alert(" Please Read & Check");
            return false;
		}		
    }
	</script>
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
table, th {
    border: 1px solid black;
}
th {
	background-color: #7f0d99;
	 color: white;
}
input[type=text]{
	height: 35px;
	width: 320px;
	border: #0e5ece 1px solid;
	border-radius: 3px;}
	
.button1  {
	padding: 10px 30px;
	background-color: #60104a;
	border: 0;
	color: #FFF;
	cursor: pointer;
	border-radius: 4px;
    font-size: 17px;}
#wrap{
	width: 1px;
}
.left{
	height: 380px;
	margin-top: 3px;
	float: left;
	margin-left: 11%;
	
}
.right{
	height: 380px;
	margin-top: 3px;
	float: right;
	margin-right: 11%;
}
.divaccount{
	float: right;
	//margin-right: 2%;
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
	border-radius: 30px;
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
</ul></div>
<div class="divaccount">
<ul id="ul">
<li class="dropaccount"><a href="#" id="fontcolor"class="drop_conaccount"><span>Account</span></a>
<ul class="drop_ulaccount">
	<li><a href="login.php">Login</a></li>
        <li><a href="loginadvertise.php">Advertise Login </a></li>
        <li><a href="signup.html">Sign Up</a></li></ul></li></ul></ul></div>
<br><br>

<?php

$server='localhost';
$user='fyp';
$password='fyp';
$database='fyp';


$connect=mysqli_connect($server,$user,$password,$database) or die('could not connect');
//$db=mysql_select_db($database,$connect) or die('no database');
	
$user_name = $_POST['user_name'];
$password = $_POST['pass'];

$data = "SELECT * FROM user_customer WHERE user_name = '$user_name' AND pass = '$password'";
$data= mysqli_query ($connect, $data);

while($info = mysqli_fetch_array( $data )){
//echo "test";
   if($password== $info['pass']){
	   echo "<center>Welcome to your aacount";
	   echo "<table border cellpadding=3>";
	   echo "<th>Userame:</th>";
	   echo "<tr>";
	   echo "<td><h2>".$info['email'] . "</h2></td> </tr>";
	   echo "</table><br/>";
}
else{
	echo "<center> Error: ";
}
}
?>
<div class="wrap">
  <div class="left">
  <form id="test" action="registerproperty.php" method="post">
  <table class="tb" id="tb" border="0" width="450" height="500" bgcolor="#f7def0">
    <tr>
    <th colspan="5" align="center"><h2>Register your property for sell</h2></th></tr>
    <tr>
      <td width="130">Type Of Property:</td><td align="left"><input type="text" name="type"></td></tr>
    <tr>
      <td>Maximum Price:</td><td> <input type="text" name="mix_price"></td></tr>
    <tr>
      <td>Minimum Price</td><td><input type="text" name="min_price"></td></tr>
	<tr>
<td>Country Location:</td><td><input type="text" name="country"></td></tr>
<tr>
<td>City Of Location:</td><td><input type="text" name="city"></td></tr>
<tr>
<td>Size Of Property:</td><td><input type="text" name="size"></td></tr>
<tr>
<td colspan="5" align="center">Sell?<input id="checkBox" type="checkbox"> &nbsp;&nbsp;&nbsp;
<button class="button button1" name="submit"  >Register</button></td></tr>
  </table></form></div>

</div>
<div class="footer">
  <p>Footer</p>
  <i style="font-size:24px" class="fa">&#xf08c;</i>
</div>
</body>
</html>