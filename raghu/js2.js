
<script>
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
        }
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
        model1.options.length = 0;
        variant1.options.length = 0;
        createOption(model1, "Car Model", "");
        var model1keys = Object.keys(myNestedVals[brand1.value]);
        createOptions(model1keys, model1)
    }

    function configurevariant1(brand1, model1, variant1) {
        variant1.options.length = 0;
        createOption(variant1, "Car Variant", "");
        var variant1keys = myNestedVals[brand1.value][model1.value];
        createOptions(variant1keys, variant1);
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
			c.name='image2';
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
  output.height=60;
  output.width=40;
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
	function onloading()
	{
		
	}
</script>