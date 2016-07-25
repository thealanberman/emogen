<?
@import_request_variables("p","var_");

function str_makerand ($minlength, $maxlength, $usespecial, $usenumbers) {
	$charset = "abcdefghijklmnopqrstuvwxyz";
	if ($usenumbers) $charset .= "0123456789";
	if ($usespecial) $charset .= "~@#$%^*()_+-={}|][";
	if ($minlength > $maxlength) {
		$length = mt_rand ($maxlength, $minlength);
	} else {
		$length = mt_rand ($minlength, $maxlength);
	}
	for ($i=0; $i<$length; $i++) {
		$key .= $charset[(mt_rand(0,(strlen($charset)-1)))];
	}
	return $key;
}

function emoband ($realname) {
	// generate seed number from name submitted
	$len = strlen($realname);
	$seed = 0; $s = 0;

	for ($e=1; $e<=$len; $e++) {
	  $chr = substr($realname,$s,$e);
	  $seed = $seed + ord($chr)*$e;
	  $s=$e;
	}

	// read in the files into arrays
	$prefix_array = file("prefix.txt");
	$join_array = file("join.txt");
	$noun_array = file("nouns.txt");
	$time_array = file("time.txt");

	// set random seed
	srand($seed);

	// get the random numbers for each name first/last or adj/noun
	$prefixrnd = rand(0,sizeof($prefix_array)-1);
	$joinrnd = rand(0,sizeof($join_array)-1);
	$nounrnd = rand(0,sizeof($noun_array)-1);
	$timernd = rand(0,sizeof($time_array)-1);

	// chance of prefix
	if (rand(0,4) > 1) $emoname = trim($prefix_array[$prefixrnd]);

	// time prefix or suffix
	if (rand(0,4) > 1) $suffix = 1;

	// base noun
	$emoname .= " ".trim($noun_array[$nounrnd]);
	$emoname = trim($emoname);

	// time unit
	if (rand(0,1) == 0) {
		if ($suffix) {
		// time as suffix
			// joiner?
			if (rand(0,2) == 0) {
				$emoname .= " ".trim($join_array[$joinrnd]);
			}
			$emoname .= " ".trim($time_array[$timernd]);
		} else {
			// joiner?
			if (rand(0,2) == 0) {
				$emoname = trim($join_array[$joinrnd])." ".$emoname;
			}
			// time as prefix
			$emoname = trim($time_array[$timernd])." ".$emoname;
		}
	}
	$emoname = trim($emoname);
	return $emoname;
}

?>
<html>
<head>
	<title>Emo Band Name Generator</title>
</head>
<body bgcolor="#FFFFFF">
<h2>Generate Your Emo Band Name</h2>
<form action="<?= $_SERVER['PHP_SELF']; ?>" METHOD="POST" name="usename">
	<b>Enter your Name: </b><br>
	<input type="text" name="realname" size=25> &nbsp; &nbsp;
	<input type="submit" value="Submit">
</form>
<form action="<?= $_SERVER['PHP_SELF']; ?>" METHOD="POST" name="makeitup">
	<input type="submit" name="makeup" value="Just Make Something Up!">
</form>
<p><hr size=1 noshade></p>
<?
	/*
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		if ($var_makeup) {
			$realname = str_makerand(9,20,1,1);
		} else {
			$realname = strtolower($var_realname);
		}
	}
	?>
	<? if (strlen(emoband($realname)) > 0) { ?>

	Your Emo Band Name is:<br>
	<br>
	<span style="background-color:#00B;color:#FFF;border:1px solid black;padding:5px 5px;font-size:1.5em;">
		<?
		emoband($realname)
		?>
	</span>
	<? }
	*/
?>
</body>
</html>
