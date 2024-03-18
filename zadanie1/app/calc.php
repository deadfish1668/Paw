<?php

require_once dirname(__FILE__).'/../config.php';

$x = $_REQUEST ['x'];
$y = $_REQUEST ['y'];
$z = $_REQUEST ['z'];


if ( ! (isset($x) && isset($y) && isset($z))) {
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ( $x == "") {
	$messages [] = 'Nie podano kwoty kredytu';
}
if ( $y == "") {
	$messages [] = 'Nie podano ilości lat';
}
if ( $z == "") {
	$messages [] = 'Nie podano oprocentowania';
}

//nie ma sensu walidować dalej gdy brak parametrów
if (empty( $messages )) {
	
	// sprawdzenie, czy $x i $y są liczbami całkowitymi
	if (! is_numeric( $x )) {
		$messages [] = 'Kwota kredytu nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $y )) {
		$messages [] = 'Ilość lat nie jest liczbą całkowita';
	}

	if (! is_numeric( $z )) {
		$messages [] = 'Oprocentowanie nie jest liczbą całkowitą';
	}

}

if (empty($messages)) {
    $x = intval($x);
    $y = intval($y);
    $z = intval($z);

    $result = ($x * (1 + ($z / 100))) / ($y * 12);
}

include 'calc_view.php';