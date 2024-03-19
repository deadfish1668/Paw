<?php

require_once dirname(__FILE__).'/../config.php';

include _ROOT_PATH.'/app/security/check.php';

function getParams(&$kwota_kredytu,&$ilosc_lat,&$oprocentowanie){
	$kwota_kredytu = isset($_REQUEST['kwota_kredytu']) ? $_REQUEST['kwota_kredytu'] : null;
	$ilosc_lat = isset($_REQUEST['ilosc_lat']) ? $_REQUEST['ilosc_lat'] : null;
	$oprocentowanie = isset($_REQUEST['oprocentowanie']) ? $_REQUEST['oprocentowanie'] : null;
}

function validate(&$kwota_kredytu,&$ilosc_lat,&$oprocentowanie,&$messages){
    if ( ! (isset($kwota_kredytu) && isset($ilosc_lat) && isset($oprocentowanie))) {
        return false;
    }

    if ($kwota_kredytu == "") {
    $messages [] = 'Nie podano kwoty kredytu';
    }

    if ($ilosc_lat == "") {
    $messages [] = 'Nie podano ilości lat';
    }

    if ($oprocentowanie == "") {
    $messages [] = 'Nie podano oprocentowania';
    }

    if(count ($messages) != 0) return false;

    if (! is_numeric($kwota_kredytu)) {
        $messages [] = 'Kwota kredytu nie jest liczbą całkowitą';
    }

    if (! is_numeric($ilosc_lat)) {
        $messages [] = 'Ilość lat nie jest liczbą całkowitą';
    }

    if (! is_numeric($oprocentowanie)) {
        $messages [] = 'Oprocentowanie nie jest liczbą rzeczywistą';
    }

    if(count ($messages) != 0) return false;
    else return true;
}

function operacja(&$kwota_kredytu,&$ilosc_lat,&$oprocentowanie,&$messages,&$result){
	global $role;
	
	$kwota_kredytu = intval($kwota_kredytu);
	$ilosc_lat = intval($ilosc_lat);
	$oprocentowanie = floatval($oprocentowanie);
	
	if($oprocentowanie < 8 && $role == "user"){
		$messages [] = "Tylko menager może udzielić tak atrakcyjnego kredytu";
	} else {
		$result = ($kwota_kredytu * (1 + ($oprocentowanie / 100))) + ($ilosc_lat * 12);
	}
}

$kwota_kredytu = null;
$ilosc_lat = null;
$oprocentowanie = null;
$result = null;
$messages = array();

getParams($kwota_kredytu,$ilosc_lat,$oprocentowanie);
if (validate($kwota_kredytu,$ilosc_lat,$oprocentowanie,$messages)) { 
	operacja($kwota_kredytu,$ilosc_lat,$oprocentowanie,$messages,$result);
}

include 'calc_view.php';
?>