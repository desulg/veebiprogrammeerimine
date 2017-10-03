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

	$picsDir = "../pics/";
	$picFileTypes = ["jpg", "jpeg", "png", "gif"];
	$picFiles = [];
	
	$allFiles = array_slice(scandir($picsDir), 2); //scandir loeb faile
	//var_dump($allFiles);
	foreach ($allFiles as $file) {
		$fileType = pathinfo($file, PATHINFO_EXTENSION);
		if (in_array($fileType, $picFileTypes) == true){
			array_push($picFiles, $file);
		}
	}
	
	//$picFiles = array_slice($allFiles, 2);
	var_dump($picFiles);
	
	$picCount = count($picFiles);
	
	$picNum = mt_rand(0, ($picCount - 1));
	$picFile = $picFiles[$picNum]
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dennis Richard Šulga veebiprogrammeerimine</title>
</head>
<body>
	<h1>Foto</h1>
	<p><a href="?logout=1">Logi välja</a></p>
	<img src="<?php echo $picsDir .$picFile; ?>" alt="kool">
	</body>	
</html>