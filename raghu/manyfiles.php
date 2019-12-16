<?php 
if(isset($_POST['submit'])){

 $countfiles = count($_FILES['file']['name']);
$uploads_dir = '/uploads';
 for($i=0;$i<$countfiles;$i++){
  $filename = $_FILES['file']['name'][$i];
 $name = basename($_FILES["file"]["name"][$i]);
  move_uploaded_file($_FILES['file']['tmp_name'][$i],"../raghu/$uploads_dir/$name");
 }
} 
?>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<form method='post' action='' enctype='multipart/form-data'>
 <input type="file" name="file[]" id="file" multiple>
 <input type='submit' name='submit' value='Upload'>
</form>
</html>