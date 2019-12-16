<html lang="en">
<head>
    <link rel="shortcut icon" type="image/png" href="../title.jpg"/>
    <!-- For apple devices -->
    <link rel = "apple-touch-icon" type = "image/png" href = "../title.png"/>

  <title>NSR AUTO WORKS</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body style="background-image: url('../img1.jpg');background-repeat: no-repeat;background-attachment: fixed;background-size: 100% 100%;">

<link rel="javascript" type="text/javascript" href="js1.js">


<!-- Button to open the modal login form -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">
    <img src="bird.jpg" alt="logo" style="width:40px;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Link 1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link 2</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link 3</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <h3>Brand / Logo</h3>
  <p>When using the .navbar-brand class on images, Bootstrap 4 will automatically style the image to fit the navbar.</p>
</div>
<div class="header" >
<div class="Cname">
<h3 class="Lname">NSR AUTO WORKS</h3>
</div>
<div class="Cname">
<button onclick="document.getElementById('id01').style.display='block'">Log In</button>
</div>
<div class="Cname">
<button onclick="document.getElementById('id02').style.display='block'">Sign Up</button>
</div>
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