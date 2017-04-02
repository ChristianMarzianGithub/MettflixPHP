<html>
	<head>
		<title>Mettflix</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
	<body >
		

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
						</div>					
				</div>				
			</div>	
			<div id="subMainBox">
				<div id="subMain">							
					<form action="home.php" method="GET">
						<input id="seachField" type="text" name="search">
						<input type="submit" name="submit" value="suchen">					
					</form>	
					<?php		
						connect();	
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

$sql = "SELECT name,pfad FROM movies where name LIKE \"%".$_GET['search']."%\"";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "<table border=1>";
    while($row = $result->fetch_assoc()) {
    	echo "<tr>";
    	echo "<td>" . $row["name"]. "</td>";
    	echo "<td>\"" . $row["pfad"]. "\"</td>";    	
    	echo "<td><a href=\"videoSite.php?name=". $row["pfad"]."\">zum Video</a></td>";   	
    	echo "</tr>";        
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();




}
?>