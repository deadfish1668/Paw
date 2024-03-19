<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator kredytowy</title>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<body>

<div style="width:90%; margin: 2em auto;">
	<!-- <a href="<?php print(_APP_ROOT); ?>/app/inna_chroniona_strona.php" class="pure-button">Inna chroniona strona</a> -->
	<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
</div>

<div style="width:90%; margin: 2em auto;">

<form action="<?php print(_APP_URL);?>/app/calc.php" method="post" class="pure-form pure-form-stacked">
<legend>Kalkulator rat kredytu</legend>
<table>
	<tr>
	<td><label for="id_kwota_kredytu">Kwota kredytu: </label></td>
	<td><input id="id_kwota_kredytu" type="text" name="kwota_kredytu" value="<?php echo isset($kwota_kredytu) ? $kwota_kredytu : '' ?>" /></td>
</tr>
<tr>
	<td></td>
</tr>
	<tr>
	<td><label for="id_ilosc_lat">Ilosc lat: </label></td>
	<td><input id="id_ilosc_lat" type="text" name="ilosc_lat" value="<?php echo isset($ilosc_lat) ? $ilosc_lat : '' ?>" /></td>
</tr>
<tr>
	<td></td>
</tr>
<tr>
	<td><label for="id_oprocentowanie">Oprocentowanie: </label></td>
	<td><input id="id_oprocentowanie" type="text" name="oprocentowanie" value="<?php echo isset($oprocentowanie) ? $oprocentowanie : '' ?>" /></td>
</tr>
	</table>
	<br>
	<input type="submit" value="Oblicz" class="pure-button pure-button-primary" />
</form>	

<?php
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo 'Wynik: '.$result; ?>
</div>
<?php } ?>

</body>
</html>