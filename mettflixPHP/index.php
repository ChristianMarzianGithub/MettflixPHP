<html>
	<head>
		<title>Meine Filmseite</title>
	</head>
	<body>
	<?php
		session_start();
		if($_SESSION['anmelden']=='angemeldet'){
			echo $_SESSION['anmelden'];
		}else
		{
			header ( 'Location: login.php' );
		};
		
	?>
	</body>
</html>