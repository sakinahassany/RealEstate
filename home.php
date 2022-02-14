<!DOCTYPE html>
<html >
<head>
<meta charset="utf-8">
	<title>Searching</title>
	<meta name="author" content="Ralph Phillips">
        <link rel="stylesheet" media="screen" href="assets/css/style.css" />
				<script type="text/javascript">
function validateForm()
    {
        //document.getElementsById('top')[0].onchange = function() {
     if (document.getElementById("top").value==" "){
	 alert("Please Select Type Of Property!");
	 return false;
}
  if (document.getElementById("mxp").value==" "){
	 alert("Please Select Maximum Price!");
	 return false;
}
  if (document.getElementById("mip").value==" "){
	 alert("Please Select Manimum Price!");
	 return false;
}
}
 
	</script>
 <style>
* {
		margin: 0px;
		padding: 0px;}
body {
		background-image: url("Blue-.jpg");
		background-repeat: no-repeat;
		background-attachment: fixed;
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
.but{
text-align: right;
margin-right: 30px; }
.select{
text-align: center; }
button {
    padding: 2px 3px;
    text-align: center;
    font-size: 18px;}/*
div.tr{  
    background-image: url("b1.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;} */
#top {
  border-radius: 7px;
  background-color: #066270; 
  text-align: center;
  font-size: 18px;
  color: white;
  padding: 3px 7px;}
#mxp {
  border-radius: 7px;
  background-color: #066270; 
  text-align: center;
  font-size: 18px;
  color: white;
  padding: 3px 7px;}
#mip {
  border-radius: 7px;
  background-color: #066270; 
  text-align: center;
  font-size: 18px;
  color: white;
  padding: 3px 7px;}
input[type=text]{  
	height: 25px;
	padding: 3px 7px;}
	
.button1  {
    font-size: 16px;}  
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
<marquee><h1 id='hd'>LandProperty.com.my</h1><p id="tr1">Find Land for buying and sale</p></marquee></div>
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
<button  class="button" onclick="location.href='signup.html';" >Signup</button>
<button class="button" onclick="location.href='login.php';" >Signin</button>
</div>
<div class='tr'><br>
<h2 align="center" >Welcome To Land-Start Business</h2>
<br> 
<form  name="Form" action="buying.php" method="post" onsubmit="return validateForm()">
<div class="select">
<select id="top" name="top" >
<option value=" ">Type Of Property </option>
<option value="Land">Land</option>
<option value="House">House</option>
</select>
&nbsp; 
<select id="mxp" name="mxp">
<option value=" ">Max Price</option>
<option value="10000000">$10000000</option>
<option value="8000000">$8000000</option>
<option value="6000000">$6000000</option>
<option value="5000000">$5000000</option>
<option value="4500000">$4500000</option>
<option value="4000000">$4000000</option>
<option value="3750000">$3750000</option>
<option value="3500000">$3500000</option>
<option value="3250000">$3250000</option>
<option value="3000000">$3000000</option>
<option value="2750000">$2750000</option>
<option value="2500000">$2500000</option>
<option value="2250000">$2250000</option>
<option value="2000000">$2000000</option>
<option value="1750000">$1750000</option>
<option value="1500000">$1500000</option>
<option value="1250000">$1250000</option>
<option value="1000000">$1000000</option>
<option value="950000">$950000</option>
<option value="920000">$900000</option>
<option value="900000">$850000</option>
<option value="870000">$800000</option>
<option value="750000">$750000</option>
<option value="700000">$700000</option>
<option value="650000">$650000</option>
<option value="600000">$600000</option>
<option value="550000">$550000</option>
<option value="500000">$500000</option>
<option value="450000">$450000</option>
<option value="400000">$400000</option>
<option value="375000">$375000</option>
<option value="350000">$350000</option>
<option value="325000">$325000</option>
<option value="300000">$300000</option>
<option value="275000">$275000</option>
<option value="250000">$250000</option>
<option value="225000">$225000</option>
<option value="200000">$200000</option>
<option value="175000">$175000</option>
<option value="150000">$150000</option>
<option value="125000">$125000</option>
<option value="100000">$100000</option>
<option value="90000">$90000</option>
<option value="80000">$80000</option>
<option value="70000">$70000</option>
<option value="60000">$60000</option>
<option value="50000">$50000</option>
<option value="40000">$40000</option>
<option value="30000">$30000</option>
<option value="20000">$20000</option>
<option value="3500">$5000</option>
<option value="3200">$4000</option>
<option value="2500">$3000</option>
<option value="2000">$2000</option>
<option value="1500">$1500</option>
<option value="1000">$1000</option>
<option value="500">$500</option>
</select>
&nbsp;
<select  id="mip" name="mip" >
<option value=" ">Min Price</option>
<option value="500">$500</option>
<option value="1000">$1000</option>
<option value="1500">$1500</option>
<option value="2000">$2000</option>
<option value="3000">$3000</option>
<option value="4000">$4000</option>
<option value="5000">$5000</option>
<option value="20000">$20000</option>
<option value="30000">$30000</option>
<option value="40000">$40000</option>
<option value="50000">$50000</option>
<option value="60000">$60000</option>
<option value="70000">$70000</option>
<option value="80000">$80000</option>
<option value="90000">$90000</option>
<option value="100000">$100000</option>
<option value="125000">$125000</option>
<option value="150000">$150000</option>
<option value="175000">$175000</option>
<option value="200000">$200000</option>
<option value="225000">$225000</option>
<option value="250000">$250000</option>
<option value="275000">$275000</option>
<option value="300000">$300000</option>
<option value="325000">$325000</option>
<option value="350000">$350000</option>
<option value="375000">$375000</option>
<option value="400000">$400000</option>
<option value="450000">$450000</option>
<option value="500000">$500000</option>
<option value="550000">$550000</option>
<option value="600000">$600000</option>
<option value="650000">$650000</option>
<option value="700000">$700000</option>
<option value="750000">$750000</option>
<option value="800000">$800000</option>
<option value="850000">$850000</option>
<option value="900000">$900000</option>
<option value="950000">$950000</option>
<option value="1000000">$1000000</option>
<option value="1250000">$1250000</option>
<option value="1500000">$1500000</option>
<option value="1750000">$1750000</option>
<option value="2000000">$2000000</option>
<option value="2250000">$2250000</option>
<option value="2500000">$2500000</option>
<option value="2750000">$2750000</option>
<option value="3000000">$3000000</option>
<option value="3250000">$3250000</option>
<option value="3500000">$3500000</option>
<option value="3750000">$3750000</option>
<option value="4000000">$4000000</option>
<option value="4500000">$4500000</option>
<option value="5000000">$5000000</option>
<option value="6000000">$6000000</option>
<option value="8000000">$8000000</option>
<option value="10000000">$10000000</option>
</select><br><br>

 <input type="text" name="Search" size="50" maxlength="88">
<button class="button" type="submit" name="myBtn">SUBMIT</button>
</div>
</form>
</div>
<div class="footer">
  <p>Footer</p>
  <i style="font-size:24px" class="fa">&#xf08c;</i>
</div>
</body></html>
