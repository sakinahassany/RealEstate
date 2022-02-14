<!DOCTYPE html>
<html >
<head>
<meta charset="utf-8">
	<title>Searching</title>
	<meta name="author" content="Ralph Phillips">
        <link rel="stylesheet" media="screen" href="assets/css/style.css" />
 <style>
* {
		margin: 0px;
		padding: 0px;}
body {
		background-image: url("blue_.jpg");
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
    background-color: #06080eb3;
}
li {
    float: left;
}
li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 10px 40px;
    text-decoration: none;
	font-weight:bold;
	font-size: large;
	font-style: normal;
}
li a:hover, .dropdown:hover .dropbtn {
    //background-color: red;
	background-color: #06080eb3;
}
li.dropdown {
    display: inline-block;
}
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #1be61bb3;
    min-width: 160px;
}
.dropdown-content a {
    color: black;
    padding: 7px 8px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
	background-color: #c1e11ce6;}

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
<ul>
<li><a href="index.html">Home</a></li>
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
<div class='tr'><br>
<div class='log'>
<form id="login_form" action="validate.php" method="post">
<table  cellspacing="0" role="presentation"  bgcolor="white" width="475">
<tr>
<td>User Name:</td>
<td>Password:</td></tr>
<tr><td><input type="text" class="inputtext" name="user_name" id="user_name" ></td>
<td><input type="password" class="inputtext" name="pass" id="pass"></td>
<td>
<button  type="submit">Login</button></td></tr>
<tr><td class="login_form_label_field"></td><td class="login_form_label_field">
<div>
<a href="forgot.php">Forgotten account?</a>
</div></td></tr></table></form>
</div>
</br><br><br><br><br></br><br></br><br></br><br><br><br><br><br></div></div></div>
<div class="footer">
  <p>Footer</p>
  <i style="font-size:24px" class="fa">&#xf08c;</i>
</div>
</body></html>
