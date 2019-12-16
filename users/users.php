<html lang="en">
<head>
    <link rel="shortcut icon" type="image/png" href="../title.jpg"/>
    <!-- For apple devices -->
    <link rel = "apple-touch-icon" type = "image/png" href = "../title.png"/>

  <title>NSR AUTO WORKS</title>
  <link rel="stylesheet" type="text/css" href="../css1.css"/>
  <link rel="stylesheet" type="text/css" href="../css2.css"/>
</head>
<body style="background-image: url('../img1.jpg');background-repeat: no-repeat;background-attachment: fixed;background-size: 100% 100%;">

<link rel="javascript" type="text/javascript" href="js1.js">


<!-- Button to open the modal login form -->


<html lang="en">
  <title>NSR HOME</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="color:white">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">
    <img src="logo.jpg" alt="logo" style="width:40px;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#" onclick="document.getElementById('id01').style.display='block'">Login</a>
    <li class="nav-item">
      <a onclick="document.getElementById('id02').style.display='block'" class="nav-link" href="#">Sign up</a>
    </li>


    
  </ul>
</nav>


<style>
h2{
	color:purple;
}
.contents
{
	background:white;opacity:0.8;
	border-radius:10px;
}
.headinggg{
	color:darkblue;
	font-size:30px;
	font-weight:bold;
	width:33%;
	background:white;
	border-radius:10px;
	
}	
.conten
{
display=none;
}
h2
{}

</style>

</br>
<div name="details" id="det" style="color:blue">
<div class="headinggg">
<p><span class="glyphicon glyphicon-wrench"></span>
Services Offered By Us</p>

</div>


<p>
<div class="contents">
<h2 class="head">
Service my car</h2>
<div class="conten">
On choosing the "service my car" option, the customer will have to choose the kind of servicing that he/she aspires to have done for the car.
After selecting the kind of service, the customer will have to enter the details of the car. After this is done, an estimate of the bill will be
generated and it is all up to the customer to continue the process or not, based on the pricing of the bill. Assuming the customer is convinced with
the estimate and is willing to go ahead and book the service, he/she will be lead to the last stage of the process where the customer has an option
of getting the car picked up and dropped back at home post servicing by the company at the cost of a 2% increase in the final bill. This option comes
with a facility of scheduling the pick-up and drop time. If the customer is willing to drop their car and pick it up post servicing, there are no extra
charges applicable. After the servicing is done, a detailed report of the service will be mailed to the customer and also, a physical copy would be given
to the customer at the time of delivery of the car. When it comes to the payment, 10% of the estimate is expected to be paid before servicing, and the remainder
of the bill could be paid after the customer receives the car after servicing.
</div>
</div>
</br>
</br>
<div class="contents">
<h2 class="head">
Sell my car</h2>
<div class="conten">
On choosing the "sell my car" option, the user will have to enter all the details of the car that the he/she is willing to sell.
The customer has an option of driving the car to the service centre or one could also schedule a time during which the company's mechanical
executive will come to the customer's residence to take a look at the car. In both the cases, a number of tests will be performed to check
how well the car is functioning. Depending how well the car fares in all the tests, a price is quoted for the car. Now, it is all up to the
customer whether to seal the deal or not. In case the customer doesn’t sell the car, the customer would have to pay for all the tests that were
performed on the car in order to come up with a price for that car. In case the deal was sealed and successful, the customer wouldn't have to
pay for the tests.
</div>
</div>
</br></br>
<div class="contents">
<h2 class="head">
Buy a car</h2>
<div class="conten">
When it comes to the "buy a car" option, the customer will have to post the requirements (size, transmission, fuel, mileage, etc) of the car
that he/she desires to buy. On submitting this, the company will revert to the customer with a few options along with the price of each option that
they feel is the closest match to the requirements posted by the customer. The customer, if interested, could request for a date and time during which
he/she could go to the company and have a look at the car and also test drive it. Based on the customer's satisfaction level, he/she could decide on
going ahead in the deal or not. The customer will not be charged in case he is not sealing the deal.
</div>
</div></br></br>
<div class="contents">
<h2 class="head">
Repair my car</h2>
<div class="conten">
When it comes to the "repair my car" option, the customer will have to enter all the details of the car that he/she is prompted to enter and can schedule
the pick-up and drop time of the car. Additionally, the customer will have to enter a brief description on how the car conked (the sequence of events).
In this case, estimating the bill is not possible. So, the customer will be forced to pay up whatever the bill amounts to.
</div>
</div></br></br>
</p>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
var  che=0;
$(document).ready(function()
{	
  $("head").hover(function()
  {
    $(".content").animate({height: 'toggle',width:'toggle',color:'black'});
	
  });
});

</script> 







</div>




<!-- The login Modal --> 
<div id="id01" class="modal" >
  <span onclick="document.getElementById('id01').style.display='none'"
  class="close" title="Close Modal">&times;</span>

  <form class="modal-content animate" action="Login.php" method="POST">
   <div class="container">
      <h2>Log In</h2>
      <hr>
      <label for="uname"><b></b></label>
      <input type="text" placeholder="Username" name="us" required>

      <label for="psw"><b></b></label>
      <input type="password" placeholder="Password" name="ps" required>

      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>

  </form>
</div>



<!-- The login Modal --> 
<div id="id01" class="modal" >
  <span onclick="document.getElementById('id01').style.display='none'"
  class="close" title="Close Modal">&times;</span>

  <form class="modal-content animate" action="../users/Login.php" method="POST">
   <div class="container">
		<p id="loginstatus"  style="display:none;color:red;">INCORRECT USERNAME OR PASSWORD</p>
		
		<div id="signemailstatus"  style="display:none;color:red;">Email:<p id="sessionem"></p>already exist</div>
      <h1>Log In</h1>
      <hr>
      <label for="uname"><b></b></label>
      <input type="text" placeholder="Username" name="us" required>

      <label for="psw"><b></b></label>
      <input type="password" placeholder="Password" name="ps" required>

      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>

  </form>
</div>

<!-- The Modal (contains the Sign Up form) -->
<div id="id02" class="modal"  >
  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content animate" onsubmit="return Validate()" action="../users/sign.php" method = "POST">
    <div class="container">
      <h1>Sign Up</h1>
	  <div id="signuserstatus"  style="display:none;color:red;">Username:<p id="sessionus"></p>already exist</div>
		<div id="passwordstatus" style="display:none;color:red;">Passwords do not match</div>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="email"><b></b></label>
      <input type="email" placeholder="Email Id" id="sem"	  name="em" required>

      <label for="username"><b></b></label>
      <input type="text" placeholder="User Name" id="sus" name="username" required>

      <label for="psw" ><b>Password</b></label>
      <input type="password" id="p1" placeholder="Enter Password" name="psw" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" id="p2" placeholder="Repeat Password" name="psw-repeat" required>

      

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix" align="center">
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signup" id="signsubmit" >Sign Up</button>
      </div>
    </div>
  </form>
</div>
</body>

<script>
let a=document.getElementById("signsubmit");
a.addEventListener("mousedown",signdetails,false);
function signdetails()
{let em=document.getElementById("sem");
let us=document.getElementById("sus");
sessionStorage.setItem("email",em.value);
sessionStorage.setItem("username",us.value);
}
</script>
<?php
function check($type)
{
	if($type=="loginerror")
	{echo'<script language="javascript">';
	echo'document.getElementById("loginstatus").style.display="block";';
	echo'document.getElementById("id01").style.display="block";';
	echo'</script>';
	}
	
	
	else if($type=="userexist")
	{
		echo'<script language="javascript">';
	echo'document.getElementById("signuserstatus").style.display="block";';
	echo'document.getElementById("id02").style.display="block";';
	echo
	'document.getElementById("sessionus").innerHTML=sessionStorage.getItem("username");';
	echo'</script>';
	}
	else if($type =="spass")
	{
	echo'<script language="javascript">';
	echo'document.getElementById("passwordstatus").style.display="block";';
	echo'document.getElementById("id02").style.display="block";';
	echo'</script>';
	}
	
	else if($type=="emailexist")
	{
		echo'<script language="javascript">';
	echo'document.getElementById("signemailstatus").style.display="block";';
	echo'document.getElementById("id01").style.display="block";';
	echo'document.getElementById("sessionem").innerHTML=sessionStorage.getItem("email");';
	
	echo'</script>';
	}
}
if(isset($_GET['login']) or isset($_GET['signup'])){
if(isset($_GET['login']))
{
	$error= $_GET['login'];
	if($error == "error"){check("loginerror");
	}
}
else if(isset($_GET['signup']))
{
	$error=$_GET['signup'];
	if($error == "userexist")
	{check("userexist");
	}
	else if($error == "emailexist")
	{check("emailexist");
	}
	else if($error == "spass")
	{check("spass");}
}
}
	echo'<script>';
	echo'let str=window.location;';
	echo'ab=String(str).split("?");';
	echo'window.history.replaceState({}, document.title,ab[0]);';
	echo'</script>';
?>
</html>