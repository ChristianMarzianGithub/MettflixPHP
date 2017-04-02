<html>
	<head>
		<title>Mettflix</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
	<body>
		

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
				</div>				
			</div>	
			<div id="subMainBox">
				<div id="subMain">		
					<?php
					echo foo();					
					connect();	
					?>		
					<video width="800" height="450" src=<?php echo foo(); ?>  controls autoplay>
					</video>
				</div>				
			</div>
		</div>
	</div>
	</body>
</html>

<?php
function foo()
{
    $retval = "\"".$_GET["name"]."\"";
    return $retval;
}
function  connect(){
$servername = "localhost";
$username = "peter";
$password = "asdf";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT name,pfad FROM movies";
$result = $conn->query($sql);


$conn->close();




}
?>