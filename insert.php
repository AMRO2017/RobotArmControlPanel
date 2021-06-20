<!DOCTYPE html>
<html>
<head>
    <title>Insert page</title>
	<style>
	h3 {
	style="padding: 80px;
	text-align: center; background: #3CB371;
	color: white; font-size: 20px;"
	}
	.button {
        padding: 15px 100px;
        margin: 10px 4px;
        color: #eee;
        font-family: sans-serif;
        text-transform: uppercase;
        text-align: center;
        position: relative;
        text-decoration: none;
        display: inline-block;
        border: 1px solid;
      }
      .button::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        display: block;
        width: 100%;
        height: 100%;
        z-index: -1;
        -webkit-transform: scaleY(.1);
        transform: scaleY(.1);
        transition: all .4s
      }
      .button:hover {
        color: #b414ba;
      }
      .button:hover::before {
        opacity: 1;
        background-color: #3CB371;
        -webkit-transform: scaleY(1);
        transform: scaleY(1);
        transition: -webkit-transform .6s cubic-bezier(.08, .35, .13, 1.02), opacity .4s;
        transition: transform .6s cubic-bezier(.08, .35, .13, 1.02), opacity
      }
	</style>	
</head>
  
<body>
    <center>
<?php
	//database connection
	$dbhost = "127.0.0.1";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "robot_arm_control_panel";
	$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	 // Check connection
        if($con === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
		
	$engine1 = $_REQUEST['value1'];
	$engine2 = $_REQUEST['value2'];
	$engine3 = $_REQUEST['value3'];
	$engine4 = $_REQUEST['value4'];
	$engine5 = $_REQUEST['value5'];
	$engine6 = $_REQUEST['value6'];
	$start 	 = $_REQUEST['start'];
	
	// Performing insert query execution
		
	$sql = "INSERT INTO engines VALUES(CURRENT_TIME(), '$engine1', '$engine2', '$engine3', '$engine4', '$engine5', '$engine6')";
	
	 if(mysqli_query($con, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
            echo nl2br("\nEngine1: $engine1\nEngine2: $engine2\nEngine3:  "
                ."$engine3\nEngine4: $engine4\nEngine5: $engine5\nEngine6: $engine6");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($con);
        }

		$sql1 = "INSERT INTO options VALUES(CURRENT_TIME(), '$start')";
	
	 if(mysqli_query($con, $sql1)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
            echo nl2br("\nStatus: $start");
        } else{
            echo "ERROR: Hush! Sorry $sql1. " 
                . mysqli_error($con);
        }
	 // Close connection
        mysqli_close($con);
        ?>
		<br><a  class="button" href="index.php" style="color:black;">Return</a>
		</center>
</body>
</html>