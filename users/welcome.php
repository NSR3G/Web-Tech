<?php
   include('../users/session.php');
   include('../users/profil_2.php');
?>
<html">
<head onload="time=setInterval(timer,1000)">
    <link rel="shortcut icon" type="image/png" href="../title.jpg">

	<title>NSR AUTO WORKS</title>
	<link rel="stylesheet" type="text/css" href="../css1.css">
	<link rel="stylesheet" type="text/css" href="../css2.css">

</head>
<body style="background-image: url('../img7.jpg');background-repeat: no-repeat;background-attachment: fixed;background-size: 100% 100%;">
  
<link rel="javascript" type="text/javascript" href="../javascript.js">

<!-- Button to open the modal login form -->
<div >
<div class="imgcontainer" >
      <h1>NSR<br>AUTO WORKS</h1>
</div>
	
    
<table width="100%">
<tr>
     <div  class="clearfix">
      <td><button onclick="document.getElementById('id03').style.display='block'">Update Profil</button></td> 
	  <td><button onclick="document.getElementById('id04').style.display='block'">Profil</button></td> 
      <td><a href="../srish/buy1.html"><button>buy a car</button></a></td>
      <td><a href="../srish/service1.html"><button>car services</button></a></td>
	  <td> <button onclick="document.getElementById('id09').style.display='block'">Repair my car</button></td> 
	  <td> <button onclick="document.getElementById('id05').style.display='block'">File a complaint</button></td> 
	  <td><a href="#" onclick="setUrl('../raghu/sellmycar.php','id07')"><button id="sell" >sell my car</button></a></td>
	  <td><button onclick="document.getElementById('id06').style.display='block'">Status</button></td>
      <td><a href="../Logout page.php"><button>Logout</button></a></td>
    </div>   
</tr>
</table>
</div>
   <script type="text/javascript">
        function setUrl(url, target) {
            clearTimeout(window.ht);
            window.ht = setTimeout(function () {
                var div = document.getElementById(target);
                div.innerHTML = '<iframe id="ifram" style="width:100%;height:600px;background-color:yellow;border-radius:10px" frameborder="1" src="' + url + '" />';
            }, 20);
			
				document.getElementById('id07').style.display='block';
        }
	
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
var  che=0;
$(document).ready(function()
{	
  $("#sell").click(function()
  {
	  
    $("#id07").animate({height: 'toggle',width:'toggle'});
	
  });
});

</script>
<div id="id07" onclick="tablecheck()" >
</div>


<h1>Welcome <?php echo $login_session; 
$_SESSION['login_user'] = $login_session;?></h1> 


<div id="id03" class="modal">
  <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
   <form class="modal-content animate" action="profil.php" method="POST">
    <div class="container">
    
    <label for="name">Name: </label>
    <input type="text" name="name" id="name" required placeholder="Enter Name : <?php echo $name;?>"><br>
    
    <label for="email">Adderess: </label>
    <input type="text" name="ad" id="ad" required placeholder="Enter Adderess : <?php echo $ad;?>"><br>
    
    <label for="Mobile">Mobile NO: </label>
    <input type="Mobile" name="mo" id="mo" required placeholder="Enter Mobile : <?php echo $mo;?>" maxlength="10"><br>
    
    <label for="DOB">Date of Birth: </label>
    <input type="date" name="dob" id="dob" required><br>
    
    <br>
    <label for="gender">Gender: </label>
    <input type="radio" name="ge" value="Male" required> Male
    <input type="radio" name="ge" value="Female" required> Female
    <br>
    
      <div class="clearfix" align="center">
        <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="ppppup">Submit</button>
        <button type="reset" class="signup">Reset</button>
        
      </div>
    </div>
  </form>
</div>

<div id="id04" class="modal">
  <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">&times;</span>
   <form class="modal-content animate" action="profil.php" method="POST">
    <div class="container">
    
    <label for="name">Name: </label>
    <?php echo $name;?><br>

    <label for="email">Email: </label>
        <?php echo $em; ?><br>
    
    <label for="email">Adderess: </label>
        <?php echo $ad; ?><br>
    
    <label for="Mobile">Mobile NO: </label>
        <?php echo $mo; ?><br>
    
    <label for="DOB">Date of Birth: </label>
        <?php echo $dob; ?><br>
    
    <br>
    <label for="gender">Gender: </label>
    <?php echo $ge; ?>
    <br>
    
      <div class="clearfix" align="center">
        <button type="button" onclick="document.getElementById('id04').style.display='none'" class="cancelbtn">Cancel</button>
        
        
      </div>
    </div>
  </form>
</div>


<div id="id05" class="modal">
  <span onclick="document.getElementById('id05').style.display='none'" class="close" title="Close Modal">&times;</span>
   <form class="modal-content animate" action="fc.php" method="POST">
    <div class="container">
    
    <label for="fc">File a complaint </label>
    <input type="text" name="fc" id="fc" required placeholder="<?php echo $complaint;?>"><br>
    
    
      <div class="clearfix" align="center">
        <button type="button" onclick="document.getElementById('id05').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signup">Submit</button>
        <button type="reset" class="signup">Reset</button>
        
      </div>
    </div>
  </form>
</div>


<div id="id09" class="modal">
  <span onclick="document.getElementById('id09').style.display='none'" class="close" title="Close Modal">&times;</span>
   <form class="modal-content animate" action="requests.php" method="POST">
    <div class="container">
    
    <label for="describe">Describe: </label>
    <input type="text" name="describe" id="describe" required placeholder=""><br>
    
	<label for="address">Car Location: </label></br>
	<label>If Permanent Address, check here</label>
	<input type="checkbox" name="pad" value="Male" ></br></br>
	<label>Address</label>
    <input type="text" name="ad" id="ad" required max="100"><br>
   
    <br>
    
    
    <br>
    
      <div class="clearfix" align="center">
        <button type="button" onclick="document.getElementById('id09').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="ppppup">Submit</button>
        <button type="reset" class="signup">Reset</button>
        
      </div>
    </div>
  </form>
</div>



<div id="id06" class="modal">
  <span onclick="document.getElementById('id06').style.display='none'" class="close" title="Close Modal">&times;</span>
   <form class="modal-content animate" action="status.php" method="POST">
    <div class="container">
    
    <label for="status"></label>
    <p><?php echo $status;?></p><br>
      <div class="clearfix" align="center">
        <button type="button" onclick="document.getElementById('id06').style.display='none'" class="cancelbtn">Cancel</button>       
      </div>
    </div>
  </form>
</div>

</body>
</html>


