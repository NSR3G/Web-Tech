<!Doctype html>
<?php
include_once("servercomplaints.php");
?>
<html lang="en">
<head>
<link rel="shortcut icon" type="image/png" href="title.jpg">
<link rel="stylesheet" type="text/css" href="css1.css">
	<link rel="stylesheet" type="text/css" href="css2.css">
  
<link rel="javascript" type="text/javascript" href="javascript.js">
<title>complaints</title>
<meta charset="utf-8">
<style>
table{border:solid;font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;}
  td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
tr:first-child {
  background-color: grey;
}
tr:not(:first-child){color:#4d88ff;}
tr:not(:first-child):hover{
	background-color:#ffff66;
	color:#400080;cursor:pointer;
}
a{text-decoration:none;color:black;}
a:hover{color:blue;text-decoration:underline;}
abbr{
	text-decoration:none;
}
</style>
</head>
<body>
<table>
  <tr style="color:white">
    <th>Name</th>
    <th>Email</th>
    <th>Address</th>
	<th>Order id</th>
	<th>Brand</th>
	<th>Model</th>
	<th>Variant</th>
	<th>Status</th>
  </tr>
<?php 
while($rows = $result->fetch_assoc())
{if($rows['obrand']!="" or $rows['obrand']!=null){
	if($rows['status']!="" or$rows['status']!=null){
?>
	<tr style="color:#400080" class="rowws" onclick="complain('<?php echo $rows['us'];?>,<?php echo $rows['em'];?>')">
	<td class="names" ><abbr title="reply complaint status"><?php echo $rows['name'];?></abbr></td>
	<td><?php echo $rows['em'];?></td>
	<td><?php echo $rows['ad'];?></td>
	<td><?php echo $rows['orderid'];?></td>
	<td><?php echo $rows['obrand'];?></td>
	<td><?php echo $rows['omodel'];?></td>
	<td><?php echo $rows['ovariant'];?></td>
	<td><?php echo $rows['status'];?></td>
	</tr>
<?php
}
else{
?>
	<tr style="color:lightblue" class="rowws" onclick="complain('<?php echo $rows['us'];?>,<?php echo $rows['em'];?>')">
	<td class="names" ><abbr title="reply complaint status"><?php echo $rows['name'];?></abbr></td>
	<td><?php echo $rows['em'];?></td>
	<td><?php echo $rows['ad'];?></td>
	<td><?php echo $rows['orderid'];?></td>
	<td><?php echo $rows['obrand'];?></td>
	<td><?php echo $rows['omodel'];?></td>
	<td><?php echo $rows['ovariant'];?></td>
	<td>Not yet replied</td></tr>
<?php
}
}}
?>
</table>	
<div id="id06" class="modal">
  <span onclick="document.getElementById('id06').style.display='none'" class="close" title="Close Modal">&times;</span>
   <form class="modal-content animate" action="status.php" method="POST">
    <div class="container" style="color:blue">
    <label for="status">enter order status:</label>
	<input style="display:none" id="us" name="us"/>
	<input style="display:none" id="em" name="em"/>
    <input type="text" name="status" /><br>
      <div class="clearfix" align="center">
        <button type="button" onclick="document.getElementById('id06').style.display='none'" class="cancelbtn">Cancel</button>
			<button type="submit" class="signup">Submit</button>
        <button type="reset" class="signup">Reset</button>
      </div>
    </div>
  </form>
</div>
</body>
<script>
function complain(usname)
{
	let c=usname.split(",");
	let a=document.getElementById("us");
	a.value=c[0];
	let b=document.getElementById("em");
	b.value=c[1];
	document.getElementById('id06').style.display='block'
}
</script>
</html>