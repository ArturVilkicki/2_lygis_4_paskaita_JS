<!DOCTYPE html>
<html>
<head>
	<title>JavaScript Paskaita</title>
	<script src="JavaScript.js"></script>
</head>
<body>
 <p id="p1">Pakeiciam isgalvota teksta</p>
 <button type="button" onclick='document.getElementById("p1").innerHTML="Hello Javascript"'>Click me!</button>
 <button type="button2" onclick="document.getElementById('p1').style.fontSize='12px'">Click me2</button><hr>
 

 <img id = "myImage" src="bulboff.jpg">
 <button type="button3" onclick = "document.getElementById('myImage').src='bulbon.png'">Mygtukas 1 pakeisti paveiksla</button>
 <button type="button4" onclick="document.getElementById('myImage').src='bulboff.jpg'">Mygtukas 2 pakeisti paveiksla</button><hr>

 <p id="pastraipa">Siandien grazus vakaras</p>
 <button type="button5" onclick="document.getElementById('pastraipa').style.display='none'">Paslepiam pastraipa</button>
 <p id="pastraipa2" style="display: none;">Siandien grazus vakaras</p>
 <button type="button6" onclick="document.getElementById('pastraipa2').style.display='block'">Parodom pastraipa</button><hr>
 <input type="text" id="pirmas">
 <input type="text" id="antras">
 <p id="atsakymas"></p><br>
 <button id="0" style="font-size: 30px;">0</button>
 <button id="1" style="font-size: 30px;">1</button>
 <button id="2" style="font-size: 30px;">2</button>
 <button id="3" style="font-size: 30px;">3</button>
 <button id="4" style="font-size: 30px;">4</button>
 <button id="5" style="font-size: 30px;">5</button>
 <button id="6" style="font-size: 30px;">6</button>
 <button id="7" style="font-size: 30px;">7</button>
 <button id="8" style="font-size: 30px;">8</button>
 <button id="9" style="font-size: 30px;">9</button><br>
 <button id="+" type="+" onclick="sudeti()" value="sudeti" style="font-size: 30px;">+</button>
 <button id="-" type="-" onclick="atimti()" value="atimti" style="font-size: 30px;">-</button>
 <button id="*" type="*" onclick="daugyba()" value="daugyba" style="font-size: 30px;">*</button>
 <button id="/" type="/" onclick="dalinti()" value="dalinti" style="font-size: 30px;">/</button>
 <button id="=" style="font-size: 30px;">=</button>
 
 <script>
 	function sudeti(){
 		var x = parseInt(document.getElementById("pirmas").value);
 		var y = parseInt(document.getElementById("antras").value);
 		var atsakymas = x+y;
 		console.log(atsakymas);
 		document.getElementById("atsakymas").innerHTML = atsakymas;
 	}
 	function atimti(){
 		var x = parseInt(document.getElementById("pirmas").value);
 		var y = parseInt(document.getElementById("pirmas").value);
 		var atsakymas = x-y;
 		console.log(atsakymas);
 		document.getElementById("atsakymas").innerHTML = atsakymas;
 	}
 	function daugyba(){
 		var x = parseInt(document.getElementById("pirmas").value);
 		var y = parseInt(document.getElementById("pirmas").value);
 		var atsakymas = x*y;
 		console.log(atsakymas);
 		document.getElementById("atsakymas").innerHTML = atsakymas;
 	}
 	function dalinti(){
 		var x = parseInt(document.getElementById("pirmas").value);
 		var y = parseInt(document.getElementById("pirmas").value);
 		var atsakymas = x/y;
 		console.log(atsakymas);
 		document.getElementById("atsakymas").innerHTML = atsakymas;
 	}
 </script>
</body>
</html>