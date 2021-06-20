<!DOCTYPE html>
<html>
<head>
	<title> Database Recently Added Values</title>
	<meta http-equiv="refresh" content="4" >
</head>
<body>
	<center>
	<h1 style="padding: 60px; text-align: center; 
	background: #1abc9c; color: white; font-size: 30px;">
	Database Recent Values</h1>
	<?php
	//database connection
	$dbhost = "127.0.0.1"; // or local host
	$dbuser = "root"; //default user 'root@localhost'
	$dbpass = ""; // no password
	$dbname = "robot_arm_control_panel";
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	
		//check connection
	if($conn === false){
		die("ERROR: could not connect. " .mysqli_connect_error());
	}
	
	// retreive recent values from table engines and options

		//engines table
		$table1 = "engines";
		$recent_row = mysqli_query($conn, "SELECT * FROM $table1 ORDER BY timestamp DESC LIMIT 1"); // recent value is at the top of the table
		$get_recent_row = mysqli_fetch_array($recent_row);
		for($i=1; $i<=6; $i++){
		echo "Engine$i: $get_recent_row[$i] <br>";		
		}
		//options table
		$table2 = "options";
		$recent_row2 = mysqli_query($conn, "SELECT * FROM $table2 ORDER BY timestamp DESC LIMIT 1"); // recent value is at the top of the table
		$get_recent2_row = mysqli_fetch_array($recent_row2);
		echo "Status: $get_recent2_row[1] <br>";
		
		mysqli_close($conn);
	?>
	</center>
</body>
</html>