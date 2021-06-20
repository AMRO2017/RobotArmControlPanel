<!doctype html>
<html lang="en"> 
<head>
	<meta charset="UTF-8"> 
	<title>Robot Arm Control panel</title>
	<style>
	body {
	background-image: url('background-image.jpg');
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-position: center bottom;
	font-family: Garamond, serif;
	background-color: #FFFFFF;
	}
	form {font-size: 200%;}
	</style>
</head>
<body>
   <center>
   <section style="float:center; color:blue; font-family:courier; font-size: 200%"> Robot Arm Control Panel </section><br>
	<form action="insert.php" method="POST">
		<label for="value1">Engine 1</label>
		<input type="range" id="value1" name="value1" min="0" max="180" value="0" step="1" onchange="change1();"> <span id="result1"> </span><br>
		<label for="value2">Engine 2</label>
		<input type="range" id="value2" name="value2" min="0" max="180" value="0" step="1" onchange="change2();"> <span id="result2"> </span><br>
		<label for="value3">Engine 3</label>
		<input type="range" id="value3" name="value3" min="0" max="180" value="0" step="1" onchange="change3();"> <span id="result3"> </span><br>
		<label for="value4">Engine 4</label>
		<input type="range" id="value4" name="value4" min="0" max="180" value="0" step="1" onchange="change4();"> <span id="result4"> </span><br>
		<label for="value5">Engine 5</label>
		<input type="range" id="value5" name="value5" min="0" max="180" value="0" step="1" onchange="change5();"> <span id="result5"> </span><br>
		<label for="value6">Engine 6<label>
		<input type="range" id="value6" name="value6" min="0" max="180" value="0" step="1" onchange="change6();"> <span id="result6"> </span><br>
		<input type="submit" id="save" name="save" onclick="openNewTab();" value="save" style="color:black; padding: 15px 32px; text-align: center; text-decoration:none;
		display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer;">
		<input type="radio" id="ON" name="start" value="ON">
		<label for="ON" style="color:black;  background-color: #00FF00; padding: 15px 32px; text-align: center; text-decoration:none;
		display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer;">ON</label>
		<input type="radio" id="OFF" name="start" value="OFF">
		<label for="OFF" style="color:black;  background-color: #FF0000; padding: 15px 32px; text-align: center; text-decoration:none;
		display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer;">OFF</label><br>
	</form>
   </center>
</body>
<script>
    function openNewTab(){
        window.location.href="http://localhost/RobotArmControlPanel/display.php";
    }
	var result1 = document.getElementById("result1");
	var value1 = document.getElementById("value1");
	var result2 = document.getElementById("result2");
	var value2 = document.getElementById("value2");
	var result3 = document.getElementById("result3");
	var value3 = document.getElementById("value3");
	var result4 = document.getElementById("result4");
	var value4 = document.getElementById("value4");
	var result5 = document.getElementById("result5");
	var value5 = document.getElementById("value5");
	var result6 = document.getElementById("result6");
	var value6 = document.getElementById("value6");
	result1.innerText = value1.value;
	result2.innerText = value2.value;
	result3.innerText = value3.value;
	result4.innerText = value4.value;
	result5.innerText = value5.value;
	result6.innerText = value6.value;
	function change1(){
		result1.innerText = value1.value;
	}
	function change2(){
		result2.innerText = value2.value;
	}
	function change3(){
		result3.innerText = value3.value;
	}
	function change4(){
		result4.innerText = value4.value;
	}
	function change5(){
		result5.innerText = value5.value;
	}
	function change6(){
		result6.innerText = value6.value;
	}
	function fStart(val) {
  if(val=="ON"){
  	document.getElementById('start').value = "OFF";
    document.getElementById('start').style = "color:black; background-color: #FF0000; 	padding: 15px 32px; text-align: center; text-decoration: none; display: inline-		block; font-size: 16px; margin: 4px 2px; cursor: pointer;";
    alert("The input value has changed. The new value is: OFF");
  }else{
  	document.getElementById('start').value = "ON";
    document.getElementById('start').style = "color:green; background-color: #00FF00; 	padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; 	font-size: 16px; margin: 4px 2px; cursor: pointer;";
    alert("The input value has changed. The new value is: ON");
    }
    
}
</script>
</html>
