<html>
	<head>
		<title>Meine Filmseite - Login</title>
	</head>
	<body>
		<?php
			session_start();
			include('phpFunctions.php');
			if(isset($_POST['name'])&&isset($_POST['password']))
			{				
				if (loggin($_POST['name'],$_POST['password'])){
					
					header ( 'Location: main.php' );
				}
				else
				{
					echo "Anmeldedaten falsch";
				}
			}		
		?>
		<div id ="loggIn">
			<form action = "<?php echo $_SERVER['PHP_SELF']; ?>"  method="POST">
				<input type="text" name="name"></br>
				<input type="password" name="password"></br>			
				<input type="submit"></br>
				
				angemeldet bleiben<input type="checkbox" name="stay">
			</form>
		</div>		
	</body>
</html>