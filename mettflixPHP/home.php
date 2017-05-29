<html>
	<head>
		 <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Mettflix</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
	 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	

	<div id="link">
		<div id="mainBox">	
			<div id="subHeaderBox">
				<div id="subHeader">					
				</div>
			</div>
			<div id="subHeaderMenuBox">
				<div id="subHeaderMenu">
					<div id="subHeaderMenuLinkList">
						<a href="index.html">frontpage</a>
						<a href="home.php">home</a>	
						<a href="newVideo.php">Neues Video</a>									
						</div>					
				</div>				
			</div>	
			<div id="subMainBox">
				<div id="subMain">							
					<form action="home.php" method="GET">
						<input id="seachField" type="text" name="search">
						<input type="submit" name="submit" value="suchen">					
					</form>
					<div class="container">
						<div class="table">
							<table>
								<?php							
									connect();							
								?>			
							</table>							
						</div>											
					</div>					
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
$username = "movieUser";
$password = "movieUser";
$dbname = "as";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if (isset($_GET['search'])) {
	$arg = $_GET['search'];	
}else{
	$arg = '';
}

$sql = "SELECT name,pfad FROM movies where name LIKE \"%".$arg."%\"";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    //echo "<table>";
    while($row = $result->fetch_assoc()) {
    	echo "<tr>";
    	echo "<td>" . $row["name"]. "</td>";    	
    	echo "<td><a href=\"videoSite.php?name=". $row["pfad"]."\">zum Video</a></td>";   	
    	echo "</tr>";        
    }
    //echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
}
?>