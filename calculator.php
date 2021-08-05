
<script>function emi(){if(document.getElementById('loan1').value==null || document.getElementById('loan1').value.length==0 || document.getElementById('months1').value==null || document.getElementById('months1').value.length==0 || document.getElementById('rate1').value==null || document.getElementById('rate1').value.length==0 ) {document.getElementById('pay1').value='Data Reqd.';}else {var pay1='';var princ1= document.getElementById('loan1').value;var term1= document.getElementById('months1').value;var intr1=document.getElementById('rate1').value / 1200;document.getElementById('pay1').value =Math.round(princ1 * intr1 / (1-(Math.pow(1/(1 + intr1), term1)))*100)/100; document.getElementById('gt1').value= Math.round((document.getElementById('pay1').value * document.getElementById('months1').value)*100)/100;document.getElementById('tintt1').value=Math.round((document.getElementById('gt1').value*1 - document.getElementById('loan1').value*1)*100)/100;}}
</script>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Apna Ghar</title>
	<meta charset="UTF-8">
	<meta name="description" content="HOUSING-CO">
	<meta name="keywords" content="LERAMIZ, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="Styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->

	
	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
					<div class="row">
					
					<div class="col-lg-6 text-lg-right header-top-right">
						<div class="top-social">
							
							<a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
							<a href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a>
							<a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
							<a href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a>
							<a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
						
							
						</div>
					</div>
						<div class="user-panel">
							<a href="register.php"><i class="fa fa-user-circle-o"></i>User Registration</a>
							<a href="reg_builder.php"><i class="fa fa-user-circle-o"></i>Builder Registration</a>
							<a href="loginuser.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Login</a>
							
						</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="site-navbar">
						<a href="index.html" class="site-logo"><img src="logo1.jpg" alt=""></a>
						<div class="nav-switch">
							<i class="fa fa-bars"></i>
						</div>
						<ul class="main-menu">
							<li><a href="index.html">HOME</a></li>
							
							<li><a href="about.html">ABOUT US</a></li>
									<li><a href="contact.html">CONTACT</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Header section end -->

	<style type="text/css">
body{
background-repeat:no-repeat;
background-image:url("img/service-bg.jpg");
background-size:cover;
background-attachment:fixed;
color:white;
}
input[type=text],input[type=date],input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    background-color: #e0e0d1;
    color:black;
}

 input[type=submit], input[type=reset] {
    background-color: #e0e0d1;
    border: none;
    color: black;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
    font-weight:bold;
}
input[type=radio] {
    height: 15px;
    width: 15px;
    
}



select {
	 background-color: #e0e0d1;
    border: none;
    color: black;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
    font-weight:bold;
}
textarea {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    background-color:#e0e0d1;
    color:black;
}
table{
 background-color:black;
  border-collapse: collapse; 
  border: 2px solid navy;
}
form{
opacity:0.7;
}
td{
font-weight:bold;
}
span
{
   color:red;
}

</style>
</head>


 <br><br><br><br><br><br><br><br><br><br><br>

<form id="form" >

<table cellpadding="7" width="50%" border="0" align="center"cellspacing="2" color="white">

    <!-- I want another button here, center to the tile-->



<tr>
<td colspan=2>
<center><img src="logo1.jpg"></img></center>
</td>
</tr>
<tr>
<td colspan=2>
<center><font size=5><b>EMI CALCULATOR</b></font></center>
</td>
</tr>

<tr>
<td><b>LOAN AMOUNT</b></td>
<td><input type="text" name="username" size="30" id="loan1" placeholder="Enter Loan Amount" required>
<span class="loan 1"></span>
<br><br>
</td>
</tr>




<tr>
<td><b>MONTHS FOR REPAYMENT </b></td>
<td><input type="text" name="password" size="30" placeholder="Enter Months for Returning Loan" required id="months1">
<span class="loan1"></span>
  <br><br>
</td>
</tr>

<tr>
<td><b>RATE OF INTEREST</b></td>
<td><input type="text" name="password" size="30" placeholder="Enter % of Interest" required id="rate1" onchange=emi();>
<span class="loan1"></span>
  <br><br>
</td>
</tr>
<tr>
<td><input type="reset" value="Reset"></td>
<td><input type="submit" size="30"  value="Check" name="Check" onclick='emi()'>

<div style = "font-size:20px; color:#cc0000; margin-top:10px"></div>
</td>
</tr>
<tr>
<td><b>EMI PER MONTH</b></td>
<td><input type="text"  size="30" id="pay1">
<span class="error"></span>
  <br><br>
</td>
</tr>
<td><b>INTEREST PAYABLE</b></td>
<td><input type="text" size="30" id="tintt1">
<span class="error"></span>
  <br><br>
</td>
</tr>
<td><b>TOTAL AMOUNT TO BE PAID</b></td>
<td><input type="text" size="30" id="gt1">
<span class="error"></span>
  <br><br>
</td>
</tr>







</table>
<br><br><br><br><br><br><br><br><br><br>
</form>


<footer class="footer-section set-bg" data-setbg="img/footer-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 footer-widget">
					<img src="logo1.jpg" alt="">
					<p>We provide you with the best services which is best for your family and which suits your pocket.</p>
					<div class="social">
						
						<a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
							<a href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a>
							<a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
							<a href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a>
							
					</div>
				</div>
				<div class="col-lg-3 col-md-6 footer-widget">
					<div class="contact-widget">
						<h5 class="fw-title">CONTACT US</h5>
						<p><i class="fa fa-map-marker"></i>You can contact us here......  </p>
						<p><i class="fa fa-phone"></i>Number</p>
						<p><i class="fa fa-envelope"></i>info.apnaghar@gmail.com</p>
						<p><i class="fa fa-clock-o"></i>Mon - Sat, 08 AM - 06 PM</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 footer-widget">
					<div class="double-menu-widget">
						<h5 class="fw-title">POPULAR PLACES</h5>
						<ul>
							<li><a href="">Mumbai</a></li>
							<li><a href="">Delhi</a></li>
							<li><a href="">Chennai</a></li>
							<li><a href="">Kolkata</a></li>
							<li><a href="">Banglore</a></li>
						</ul>
						<ul>
							<li><a href="">Chandigarh</a></li>
							<li><a href="">Pune</a></li>
							<li><a href="">Jaipur</a></li>
							<li><a href="">Kochi</a></li>
							<li><a href="">Ooty</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6  footer-widget">
					<div class="newslatter-widget">
						<h5 class="fw-title">NEWSLETTER</h5>
						<p>Subscribe your email to get the latest news and new offer also discount</p>
						<form class="footer-newslatter-form">
							<input type="text" placeholder="Email address">
							<button><i class="fa fa-send"></i></button>
						</form>
					</div>
				</div>
			</div>
			
		</div>
	</footer>




 
</body>
</html>
