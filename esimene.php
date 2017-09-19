<?php
	//See on kommentaar, järgmisena paar muutujat
	$myName = "Dennis Richard";
	$myFamilyName = "Šulga";
	
	$monthNamesEt = ["jaanuar","veebruar", "märts", "aprill", "mai", "juuni", 
	"juuli", "august", "september", "oktoober", "november", "detsember"];
	//var_dump($monthNamesEt);
	//echo $monthNamesEt[8];
	$monthNow = $monthNamesEt[date("n") - 1]; //'m' viskab 0-i ette, aga 'n' ei viska
	
	
	//vaatame, mis kell on ja määramae päeva osa
	$hourNow = date("H");
	//echo $hourNow;
	$partOfDay = "";
	if ( $hourNow < 8){
		$partOfDay = "varajane hommik";
	}
	if ($hourNow >= 8 and $hourNow < 16){
		$partOfDay = "koolipäev";
	}
	if ($hourNow >16){
		$partOfDay = "vaba aeg";
	}
	//echo $partOfDay;
	
	//vaatame, kaua on kooliüäeva lõpuni aega jäänud
	$timeNow = strtotime(date("d.m.Y H:i:s"));
	//echo $timeNow;
	$schoolDayEnd = strtotime(date("d.m.Y" ." " ."15:45")); 
	//echo $schoolDayEnd;
	$toTheEnd = $schoolDayEnd - $timeNow;
	//echo "Koolipäeva lõpuni on jäänud ". round($toTheEnd / 60);
	
	//tegeleme vanusega
	$myBirthYear;
	$ageNotice = ""; 
	//var_dump($_POST)
	if (isSet($_POST["birthYear"])) {
		$myBirthYear = $_POST["birthYear"];
		$myAge = date("Y") - $_POST["birthYear"];
		//echo $myAge;
		$ageNotice = "<p>Teie vanus on ligikaudu " .$myAge ." aastat.</p>";
		
		$ageNotice .= "<p>Olete elanud järgnevatel aastatel: </p>";
		$ageNotice .= "<ul>";
		
		$yearNow = date("Y");
		for($i = $myBirthYear; $i <= $yearNow; $i ++){
			$ageNotice .= "<li>" .$i ."</li>";
		}
		$ageNotice .="</ul>";
	}
		
		
		//teeme tsükli
		/*for ($i = 0; $i<10; $i++){
			echo "jop";
		}*/
	
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dennis Richard Šulga veebiprogrammeerimine</title>
</head>
<body>
	<h1>
	<?php
		echo $myName ." ".$myFamilyName
	?>
	 veebiproge</h1>
	<p>See leht on loodud õppetöö raames ja siit otsida midagi on mõttetu.</p>
	<h2>Dennise tutvustus</h2>
	<p>Aga no kui sa juba siia sattusid, siis räägin paar hästi olulist fakti enda kohta:</p>
		<ul>
			<li>Korvpall on elu</li>
			<li>Olen kontsert aka live valgustaja</li>
			<li>Elu on liiga lühike, et otsida sahtlist sarnaseid sokke</li>
			<li>Tegelen muusikaga ka ja mängin bassi</li>
		</ul>
	<p><i>P.S. Tahaks siia pilte ka lisada. Varsti tulevad</i><p> 
	
	<?php
		echo "<p>See on esimene jupp PHP abil väljastatud teksti!</p>";
		echo "<p>Täna on ";
		echo date("d. ") .$monthNow .date(" Y") .", kell lehe avamisel oli " .date("H:i:s");
		echo ", käes on ". $partOfDay.".</p>";
	?>
	
	<h2>Natuke aastaarvudest</h2>
	<form method = "POST">
		<label>Teie sünniaasta: </label>
		<input type="number" name="birthYear" id="birthYear" min="1900" max="2017" value="<?php echo $myBirthYear; ?>">
		<input type="submit" name="submitBirthYear" value="Kinnita">
	
	</form>
	<?php
		if ($ageNotice != ""){
			echo $ageNotice;
		} 
	?>
	</body>	
</html>