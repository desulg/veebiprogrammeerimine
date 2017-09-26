<?php
	$signupFirstname = "";
	if (isset ($_POST["signupFirstname"])){
		if (empty ($_POST["signupFirstname"])){
			//$signupFirstNameError ="NB! Väli on kohustuslik!";
		} else {
			$signupFirstname = $_POST["signupFirstname"];
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sisselogimine</title>
</head>
<body>
	<h1>Sign in or Log in</h1>
	<h3>Sisselogimine</h3>
	<form method = 'POST'>
		<label>Email</label>
		<input name="loginEmail" type="email">
		<label>Parool</label>
		<input name = "loginPassword" type = "password">
		<input type = "submit" name = "login" value = "Login">
	</form>
	<h3>Uue kasutaja loomine</h3>
	<div class = "register">	
		<form method = "POST">
			<label>Eesnimi</label>
			<input name = "signupFirstname" type = "text" value= "<?php echo $signupFirstname; ?>">
			<label>Perekonnanimi</label>
			<input name = "signupFamilyname" type = "text">
			<label>Sugu</label>
			<input type = "radio"  name = "gender" value = "1">
			<input type = "radio"  name = "gender" value = "2">
			<label>Email</label>
			<input name = "signupEmail" type = "email">
			<label>Parool</label>
			<input name = "signupPassword" type = "password">
			<input type = "submit" name = "signup" value = "Signup">
	</div>
</body>
</html>