<?php
	require("functions.php");
	
	//kas on sisse loginud
	if(!isSet($_SESSION["userId"])){
		header("Location: login.php");
		exit();
	}
	
	//väljalogimine
	if(isSet($_GET["logout"])){
		session_destroy();
		header("Location: login.php");
		exit();     
	}
		#require("../../usersinfotable.php");
		#<?php echo creatUserstable()
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dennis Richard Šulga veebiprogrammeerimine</title>
</head>
<body>
	<h1>Kasutajad</h1>
	<p><a href="?logout=1">Logi välja</a></p>
	<hr>
	<h2>Kõik süsteemi kasutajad</h2>
	
	</body>	
</html>