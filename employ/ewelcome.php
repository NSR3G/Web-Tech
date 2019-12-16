<?php
   include('esession.php');
   include('eprofil_2.php');
?>
<html lang="en">
<head>
    <link rel="shortcut icon" type="image/png" href="../title.jpg">

	<title>NSR Employees</title>
	<link rel="stylesheet" type="text/css" href="../css1.css">
	<link rel="stylesheet" type="text/css" href="../css2.css">
	<style>
	</style>
</head>
<body style="background-image: url('../eimg5.jpg');background-repeat: no-repeat;background-attachment: fixed;background-size: 100% 100%;">
  
<link rel="javascript" type="text/javascript" href="../javascript.js">
<!-- Button to open the modal login form -->
<div >
<div class="imgcontainer" style="background-color:gray; color:gold;">
      <h1>NSR<br>Employees</h1>
  </div>
	
    
<table width="100%">
<tr>
     <div  class="clearfix">
      <td> <button onclick="document.getElementById('id03').style.display='block'">Update Profil</button></td> 
	  <td> <button onclick="document.getElementById('id04').style.display='block'">Profil</button></td>
       <td><a href="#" onclick="setUrl('../raghu/complaints.php','id07')" ><button class="complainbut">orders</button></a></td>
       <td><a href="#" onclick="setUrl('../raghu/complaints.php','id07')" ><button class="complainbut">services requests</button></a></td>
		<td><a href="#" onclick="setUrl('../raghu/complaints.php','id07')"><button
		class="complainbut">complaints</button></a></td>
      <td> <a href = "../logout page.php"><button onclick="">Log Out</button></a></td>
    </div>    
    </tr>
</table>
</div>
   <script type="text/javascript">
        function setUrl(url, target) {
            clearTimeout(window.ht);
            window.ht = setTimeout(function () {
                var div = document.getElementById(target);
                div.innerHTML = '<iframe id="ifram" style="width:100%;height:500px;background-color:white;border-radius:10px" frameborder="1" src="' + url + '" />';
            }, 20);
			
				document.getElementById('id07').style.display='block';
        }
	
</script>



<div id="id07" onclick="tablecheck()" >
</div>


<h1 style="color:gold;">Welcome <?php echo $login_session; 
$_SESSION['login_user'] = $login_session;?></h1> 


<div id="id03" class="modal">
  <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
   <form class="modal-content animate" action="../employ/eprofil_2.php" method="POST">
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
        <button type="submit" class="signup">Submit</button>
        <button type="reset" class="signup">Reset</button>
        
      </div>
    </div>
  </form>
</div>

<div id="id04" class="modal">
  <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">&times;</span>
   <form class="modal-content animate" action="../employ/eprofil_2.php" method="POST">
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
var  che=0;
$(document).ready(function()
{	
  $(".complainbut").click(function()
  {
    $("#id07").animate({height: 'toggle',width:'toggle'});
	
  });
});

</script> 
</head>
</body>
</html>


