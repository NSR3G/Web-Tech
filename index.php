<html lang="en">
<head>
    <link rel="shortcut icon" type="image/png" href="title.jpg"/>
    <!-- For apple devices -->
    <link rel = "apple-touch-icon" type = "image/png" href = "title.png"/>

  <title>NSR AUTO WORKS</title>
  <link rel="stylesheet" type="text/css" href="css1.css"/>
  <link rel="stylesheet" type="text/css" href="css2.css"/>
</head>
<body style="background-image: url('img1.jpg');background-repeat: no-repeat;background-attachment: fixed;background-size: 100% 100%;">

<link rel="javascript" type="text/javascript" href="js1.js">


<!-- Button to open the modal login form -->
<div class="header" >
<div class="Cname">
<h3 class="Lname">NSR AUTO WORKS</h3>
</div>
<div class="Cname">
<a href = "employ/employ.php"><button onclick="">Employees</button></a>
</div>
<div class="Cname">
<a href="users/users.php"><button onclick="">Users</button></a>
</div>

</div>



<!-- The Modal (contains the Sign Up form) -->
<div id="id02" class="modal"  >
  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content animate" onsubmit="return Validate()" action="sign.php" method = "POST">
    <div class="container">
      <h2>Sign Up</h2>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="email"><b>Email Id</b></label>
      <input type="email" placeholder="Enter E-mail" name="em" required>

      <label for="username"><b>User Name</b></label>
      <input type="text" placeholder="Enter User Name" name="username" required>

      <label for="psw" ><b>Password</b></label>
      <input type="password" id="p1" placeholder="Enter Password" name="psw" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" id="p2" placeholder="Repeat Password" name="psw-repeat" required>

      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix" align="center">
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signup">Sign Up</button>
      </div>
    </div>
  </form>
</div>
  <script type="text/javascript">
    function Validate() {
        var password = document.getElementById("p1").value;
        var confirmPassword = document.getElementById("p2").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script>

</body>
</html>


