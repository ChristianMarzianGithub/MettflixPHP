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
				</div>				
			</div>	
			<div id="subMainBox">
				<div id="subMain">		
					<?php
					echo foo();	
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
