<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php							
	echo connect();							
?>	

</body>
</html>

<?php
function  connect(){
	$s = $_POST["usr"];
    return $s; 
}
?>