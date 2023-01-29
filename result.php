<!DOCTYPE html>
<html>
	<head>
		<title>Ergebnis</title>
	</head>
	<body>
<?php

/*  PIR-Calc - A PIR-friendly calculation tool
    Copyright (C) 2023  Darius Runge

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <https://www.gnu.org/licenses/>.
	
	Darius Runge
	Postfach 3
	72669 Unterensingen
	GERMANY
	
	Tel: +49 7022 5064970
	Fax: +49 7022 5064971
	
	E-Mail: darius-runge@magenta.de
	
	Please keep in mind that the huge variety of e-mail protocols, anti-spam
	measures etc. cannot possibly guarantee the actual delivery of an e-mail.
	Send a fax or letter if the message is important.
*/
		
require_once __DIR__ . '/vendor/autoload.php'; 

require_once __DIR__ . '/math.php';
	
use \Matex\Evaluator;
		
function echo_tail() {
	echo("\n\t</body>\n</html>");
	return;
}

if(!isset($_POST["eval"]) || empty(trim($_POST["eval"]))) {
	echo("\t\t<p><strong>Fehler: </strong>Leerer Ausdruck übermittelt.</p>");
	echo_tail();
	exit();
}

if($_POST["len"] < 0 || $_POST["len"] > 12) {
	echo("\t\t<p><strong>Fehler: </strong>Die Zahl der Nachkommastellen muss zwischen 0 und 12 liegen.</p>");
	echo_tail();
	exit();
}
	
if($_POST["xival"] <= 0) {
	echo("\t\t<p><strong>Fehler: </strong>Der Intervalwert von X wurde kleiner/gleich Null angegeben.</p>");
	echo_tail();
	exit();
}

if($_POST["xmin"] >= $_POST["xmax"]) {
	echo("\t\t<p><strong>Fehler: </strong>Der minimale Wert für X wurde als größer/gleich dem maximalen Wert angegeben.</p>");
	echo_tail();
	exit();
}

$out_str = "";
$inner_marquee = "";
	
$evaluator = new Evaluator();
	
$evaluator->functions = [
	'sin' => ['ref' => 'sin', 'arc' => null],
	'cos' => ['ref' => 'cos', 'arc' => null],
	'tan' => ['ref' => 'tan', 'arc' => null],
	'exp' => ['ref' => 'exp', 'arc' => null],
	'pow' => ['ref' => 'pow', 'arc' => null],
	'sqrt' => ['ref' => 'sqrt', 'arc' => null],
	'cbrt' => ['ref' => 'cbrt', 'arc' => null],
	'sum' => ['ref' => 'sum', 'arc' => null],
	'min' => ['ref' => 'min', 'arc' => null],
	'max' => ['ref' => 'max', 'arc' => null],
	'abs' => ['ref' => 'abs', 'arc' => null],
	'avg' => ['ref' => 'avg', 'arc' => null]
];
	
$evaluator->variables = [
	'pi' => 3.14159,
	'e' => 2.71828
];

$xVal = floatval($_POST["xmin"]);

while($xVal <= $_POST["xmax"]) {
	$evaluator->variables['x'] = $xVal;
	try {
		$result = $evaluator->execute($_POST["eval"]);
		$inner_marquee .= "<strong>" . $xVal . ": </strong>" . sprintf('%0.*F', intval($_POST["len"]), $result);
		if($xVal + $_POST["xival"] <= $_POST["xmax"])	// Do not append in last iteration
			$inner_marquee .= "&nbsp;&bull;&nbsp;";
	}
	catch (ArgumentCountError $e) {
		echo("\t\t<p>Unzulässige Anzahl an Argumenten in einem Funktionsaufruf!</p>");
		echo_tail();
		exit();
	}
	catch (Exception $e) {
		$inner_marquee .= "<strong>" . $xVal . ": </strong><span style=\"color: fuchsia;\">(null)</span>";
		if($xVal + $_POST["xival"] <= $_POST["xmax"])	// Do not append in last iteration
			$inner_marquee .= "&nbsp;&bull;&nbsp;";
	}

	$xVal += $_POST["xival"];
}

$out_str = "\t\t<marquee>" . $inner_marquee . "</marquee>";

echo($out_str);
		
echo_tail();

?>