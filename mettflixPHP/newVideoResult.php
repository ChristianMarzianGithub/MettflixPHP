<html>
	<head>
		 <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Mettflix</title>
		
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
	<body>
	 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

	<div id="link">
		<div id="mainBox">	
			<div id="subHeaderBox">
				<div id="subHeader">					
				</div>
			</div>
			<div id="subHeaderMenuBox">
				<div id="subHeaderMenu">
					<a href="index.html">frontpage</a>
					<a href="home.php">home</a>						
					<a href="newVideo.php">Neues Video</a>									
				</div>				
			</div>	
			<div id="subMainBox">
				<div id="subMain">		
					<?php
					echo foo();	
					connect();
					echo $_GET["newVideoFile"];
					echo $_GET["videoName"];
					?>		


					

				</div>				
			</div>
		</div>
	</div>
	</body>
</html>

<?php
function foo()
{
    $retval = "";
    return $retval;
}

function  connect(){
$servername = "localhost";
$username = "movieUser";
$password = "movieUser";
$dbname = "as";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$arg1 = "hallo";
$arg2 = "qwer";

$sql = "INSERT INTO movies (name,pfad)VALUES(".arg1.",".arg2.")";
echo $arg1;
echo $arg2;
echo $sql,
$result = $conn->query($sql);


$conn->close();
}
?>
