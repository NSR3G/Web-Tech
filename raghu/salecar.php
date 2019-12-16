<?php
if(isset($_FILES['fileToUpload1']))
{
	$file=$_FILES['fileToUpload1'];
	//print_r($file);
	$file_name = $file['name'];
	$file_tmp=$file['tmp_name'];
	$file_size=$file['size'];
	$file_error=$file['error'];
	//
	$file_ext = explode('.',$file_name); 
	//print_r($file_ext);
	$file_ext=strtolower(end($file_ext));
	//print_r($file_ext);
	$allowed=array('jpeg','jpg');
	if(in_array($file_ext,$allowed))
	{
		if($file_error===0)
			{if($file_size<=5000000)
				{$file_name_new=$file_name;
				$file_destination='uploads/'.$file_name_new;
				if(move_uploaded_file($file_tmp,$file_destination))
				{echo $file_destination;}
				else
				{echo "false";}
				}
			else{echo "size";}
			}
		else
		{echo "error".$file_error;}
			
	}
	}

