<html>
<body>
<?php 
	$myfile = fopen("sportinfos.txt", "a") or die("Unable to open ");
	$txt = $_POST["firstname"]."\n";
	fwrite($myfile, $txt); 
	$txt = $_POST["lastname"]."\n";
	fwrite($myfile, $txt);
	$txt = $_POST["gender"]."\n";
	fwrite($myfile, $txt);
	$txt = $_POST["fteam"]."\n";
	fwrite($myfile, $txt);
	$txt = $_POST["bteam"]."\n";
	fwrite($myfile, $txt);
	fclose($myfile);

?>
First name: <?php echo $_POST["firstname"]; ?> <br>
Last name: <?php echo $_POST["lastname"]; ?> <br>
Gender: <?php echo $_POST["gender"]; ?> <br>
Football team: <?php echo $_POST["fteam"];?><br>
Basketball team <?php echo $_POST["bteam"];?><br>


</body>
</html>