<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" type="image/png" href="title.jpg">
<title>car selling</title>
<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="css5.css">
</head>


<body>

<h2 class="heading"  height="0%" width="0%">Please fill in details of the car</h2>

<!__car details__>






<div class="split left">
<form name="form_1">
<label for="makeyear" >car make</label>
<input onblur="check_data(this)" type="number" name="makeyear" min="2000" max="2019" value="2000"  required><br>
<label for="brand">select car</label><br>


  <select id="brand1" onchange="configuremodel1(this, document.getElementById('model1'), document.getElementById('variant1'))" required>
    <option value="">Car Brand</option>
    <option value="tata">tata</option>
    <option value="maruthi">maruthi</option>
	<option value="toyota">toyota</option>
  </select>
<label for="model"></label>

  <select id="model1" onchange="configurevariant1(document.getElementById('brand1'), this, document.getElementById('variant1'))" onblur="check_data(this)" required>
  </select>
 
  <label for="variant"></label>

  <select id="variant1" onchange="selectedcar(this)" required>

  </select>
</form>
<div class="selected-car">
<p id="car"></p>
</div>
<!__describe car__>
<form name="form_2" required>
<br>
<textarea style="color:purple;font-size:20px" name="message" rows="10" cols="30" maxlength="300"
onfocus="if(this.innerHTML == 'Describe your car here') { this.innerHTML = '';this.style.background ='#FFCCCC'; }"
>Describe your car here</textarea><br>
<label for="paddress"> Permanent address</label> 
<input type="checkbox" id="address">
</br>
<label for="address">address:</label></br>
<textarea type="text" name="address" rows="2" cols="30" onfocus="if(this.value == 'value') { this.value = '';this.style.background ='#FFCCCC';  }" value="" maxlength="100"></textarea>

<button onclick="submitforms()" type="submit">submit</button>
</form>
</div>
<!__image upload__>
<div class="split right">
<form name="form_3" action="salecar.php" method="post" enctype="multipart/form-data">
    Select image to upload:<br>
<div id="input_images">    
<input type="file"accept="image/*" name="fileToUpload1" id="fileToUpload1" onchange="checkimage(this)" required>
</div>
</form>
<div id="image_container" onclick="imagezoom()">
</div>
</div>

<script>

document.getElementById("model1").style.display = "none";
document.getElementById("variant1").style.display = "none";
    var myNestedVals = {
        'maruthi': {
            'swift': ['ldi', 'vdi', 'zdi','zdi plus','lxi','vxi','zxi'],
            'alto800': ['cnglxi', 'lxi', 'std','vxi'],
            'baleno': ['alpha diesel', 'dleta diesel', 'sigma diesel','zeta diesel']
        },
        'tata': {
            'tiago': ['q XB', 'q XE', 'q XM','q XT','q XZ'],
            'tigor': ['XE', 'XM', 'XZ'],
            'sumo': ['CX', 'CX PS', 'EX','GX']
        },
        'toyota': {
            'innovacrysta': ['GX', 'VX', 'ZX'],
            'etios': ['VD', 'VXD', 'GD'],
            'fortuner': ['2wdAT', '2wdMT', '4wdAT','4wdMT']
        },
		'toyota': {
            'innovacrysta': ['GX', 'VX', 'ZX'],
            'etios': ['VD', 'VXD', 'GD'],
            'fortuner': ['2wdAT', '2wdMT', '4wdAT','4wdMT']
        },
		
    }
	
	
	
     function createOption(ddl, text, value) {
        var opt = document.createElement('option');
        opt.value = value;
        opt.text = text;
        ddl.options.add(opt);
    }

    function createOptions(optionsArray, ddl) {
        for (i = 0; i < optionsArray.length; i++) {
            createOption(ddl, optionsArray[i], optionsArray[i]);
        }
    }


    function configuremodel1(brand1, model1, variant1) {
		document.getElementById("model1").style.display = "block";
        model1.options.length = 0;
        variant1.options.length = 0;
        createOption(model1, "Car Model", "");
		document.getElementById("car").innerHTML="car selected: "+brand1.value;
        var model1keys = Object.keys(myNestedVals[brand1.value]);
        createOptions(model1keys, model1)
    }
	
	

    function configurevariant1(brand1, model1, variant1) {
		document.getElementById("variant1").style.display = "block";
        variant1.options.length = 0;
        createOption(variant1, "Car Variant", "");
		document.getElementById("car").innerHTML="car selected: "+brand1.value+"-"+model1.value;
        var variant1keys = myNestedVals[brand1.value][model1.value];
        createOptions(variant1keys, variant1);
    }
	
	
	
	function selectedcar(variant)
	{
document.getElementById("car").innerHTML="car selected: "+brand1.value+"-"+model1.value+"-"+variant.value;
	}
	var imgn=0;
	
	
	
	function checkimage(image)
	{	
		let a=image;
		let array = a.value.split(".",2); 
		let list=["jpg","jpeg","png","JPG","JPEG","PNG"];
		let f=0;
		for(let i=0;i<list.length;i++)
		{if((array[array.length-1])!=list[i])
		{f++;}}
		if(f==6)
		{alert("check the type of file");a.value="";}
		else if(imgn<5){
			let b=image;
			let a=document.createElement('input');
			a.type="file";
			a.id="fileToUpload2";
			a.name="fileToUpload2";
			a.setAttribute('onchange','checkimage(this)');
			b.parentNode.appendChild(a);
			let c=document.createElement('img');
			c.name='image';
			
			let d=document.getElementById("image_container");
			d.appendChild(c);
			preview_image(event ,c);
			imgn=imgn+1;
		}
	}





	function preview_image(event , out)
	{
		 var reader = new FileReader();
 reader.onload = function()
 {
  var output = out;
  output.height=200;
  output.width=280;
  output.src = reader.result;
  output.class= 'image';
 }
 reader.readAsDataURL(event.target.files[0]);
	}
	
	
	
	function submitforms()
	{
		let forms=document.forms;
		for(let i=0;i<forms.length;i++)
		{
			forms[i].submit();
		}
	}
	
	
	function check_data(data_in)
	{
		if(data_in.name=="makeyear"){
		if(data_in.value>2019 || data_in.value<2000 )
		{alert("make year should range between 2000 to 2019");data_in.value="2000";data_in.focus();}}
		else if(data_in.id=="brand1")
		{if(data_in.value==""){alert("brand");}}
	}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>

$( window ).load(function() {
  $(".heading").animate({height: '100%',width:'100%'});
});

</script>
</body>
</html>