function dice()
{	
	var w = document.getElementById("board").clientWidth -(64);
	var h = document.getElementById("board").clientHeight -(64);
	
	document.getElementById("board").innerHTML  = "";
	
	for(var i = 0; i < document.getElementById("diceNumber").value; i++)
	{
		var rotation = Math.floor(Math.random() * 360);
		document.getElementById("board").innerHTML  += "<img src='./resources/Dice/dieWhite"
			+(Math.floor(Math.random() * 6) + 1)
			+".png' style='position: absolute;top: "
			+Math.floor(Math.random() * h)
			+"px;left: "
			+Math.floor(Math.random() * w)
			+"px;"
			+"-	ms-transform: rotate("+rotation+"deg); /* IE 9 */"
			+"-webkit-transform: rotate("+rotation+"deg); /* Chrome, Safari, Opera */"
			+"transform: rotate("+rotation+"deg);'>";
	}
}

var m =0, s = 0;
var tlock = false;
var clock; 
function timer()
{
	if(!tlock)
	{
		m = document.getElementById("minute").value;
		s = document.getElementById("second").value;
		tlock = true;
		clock = setInterval(myTimer, 1000);
	}
	else
	{
		clearInterval(clock);
		tlock = false; 
		document.getElementById("clock").innerHTML = "00:00"; 
	}
}

function myTimer() 
{
	s --; 
	if( s < 0) 
	{
		s = 59; 
		m--; 
		if(m < 0)
		{
			tlock = false; 
			clearInterval(clock);
			return; 
		}
	}
	document.getElementById("clock").innerHTML = m + ":" + s;
	console.log("tick");
}