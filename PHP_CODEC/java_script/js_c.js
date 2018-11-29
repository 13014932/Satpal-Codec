
function numone()
{
		var temp=document.getElementById("textbox2").value;
		document.getElementById("textbox2").value = temp + "1" ;
		var temp2=document.getElementById("textbox1").value;
		document.getElementById("textbox1").value=temp2 + "1";
}
function numtwo()
{
	var temp=document.getElementById("textbox2").value;
	document.getElementById("textbox2").value=temp + "2";
	var temp2=document.getElementById("textbox1").value;
	document.getElementById("textbox1").value = temp2 + "2";
	
}
function numthree()
{
	var temp=document.getElementById("textbox2").value;
	document.getElementById("textbox2").value=temp + "3";
	var temp2=document.getElementById("textbox1").value;
	document.getElementById("textbox1").value = temp2 + "3";
	
}
function numfour()
{
	var temp=document.getElementById("textbox2").value;
	document.getElementById("textbox2").value=temp + "4";
	var temp2=document.getElementById("textbox1").value;
	document.getElementById("textbox1").value = temp2 + "4";
}
function numfive()
{
	var temp=document.getElementById("textbox2").value;
	document.getElementById("textbox2").value=temp + "5";
	var temp2=document.getElementById("textbox1").value;
	document.getElementById("textbox1").value = temp2 + "5";
}
function numsix()
{
	var temp=document.getElementById("textbox2").value;
	document.getElementById("textbox2").value=temp + "6";
	var temp2=document.getElementById("textbox1").value;
	document.getElementById("textbox1").value = temp2 + "6";
}
function numseven()
{
	var temp=document.getElementById("textbox2").value;
	document.getElementById("textbox2").value=temp + "7";
	var temp2=document.getElementById("textbox1").value;
	document.getElementById("textbox1").value = temp2 + "7";
}
function numeight()
{
	var temp=document.getElementById("textbox2").value;
	document.getElementById("textbox2").value=temp + "8";
	var temp2=document.getElementById("textbox1").value;
	document.getElementById("textbox1").value = temp2 + "8";
}
function numnine()
{
	var temp=document.getElementById("textbox2").value;
	document.getElementById("textbox2").value=temp + "9";
	var temp2=document.getElementById("textbox1").value;
	document.getElementById("textbox1").value = temp2 + "9";
}

function sum()
{
	opertaion= "+";
	var firstnumber=document.getElementById("textbox2").value;
	document.getElementById("textbox1").value=firstnumber + "+";
	document.getElementById("textbox2").value="";
}
function sub()
{
	opertaion = "-";
	var firstnumber=document.getElementById("textbox2").value;
	document.getElementById("textbox1").value=firstnumber+ "-";
	document.getElementById("textbox2").value = "";
	
		
}
function mul()
{
	opertaion = "*";
	var firstnumber=document.getElementById("textbox2").value;
	document.getElementById("textbox1").value=firstnumber+ "*";
	document.getElementById("textbox2").value = "";
	
		
}

function equalto()
{
	
		if(opertaion == "+")
		{
		var firstnumber=parseInt(document.getElementById("textbox1").value);
		var secoundnumber=parseInt(document.getElementById("textbox2").value);
		var finelans = firstnumber + secoundnumber;
		document.getElementById("textbox2").value= firstnumber + "+" + secoundnumber + "=" +finelans;
		
		}
		else if(opertaion == "-")
		{
			var firstnumber=parseInt(document.getElementById("textbox1").value);
			var secoundnumber=parseInt(document.getElementById("textbox2").value);
			var finelans =  firstnumber - secoundnumber ;
				document.getElementById("textbox2").value= firstnumber + "-" + secoundnumber + "=" +finelans;
		}
		else if (opertaion == "*")
		{
			var firstnumber=parseInt(document.getElementById("textbox1").value);
			var secoundnumber=parseInt(document.getElementById("textbox2").value);
			var finelans =  firstnumber * secoundnumber ;
				document.getElementById("textbox2").value= firstnumber + "*" + secoundnumber + "=" +finelans;
			
		}
		
		
}
function win()
{
	
	window.prompt();
}
function wrong_cut()
{
 var inputdata=document.getElementById("textbox2").value;
	var inputdel=inputdata.substr(0,(inputdata.length-1));
	document.getElementById("textbox2").value=inputdel;
	
	var inputdata1=document.getElementById("textbox1").value;
	var inputdel1=inputdata1.substr(0,(inputdata1.length-1));
	document.getElementById("textbox1").value=inputdel1;

}
function value_copy()
{
	var temp3=document.getElementById("textbox2").value;
	document.getElementById("textbox1").value=temp3;
	
}
function clr()
{
	document.getElementById("textbox1").value = '';
	document.getElementById("textbox2").value = '';
	
	
}








	