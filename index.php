<!DOCTYPE html>
<html>
	<head>
		<title>Wertetabelle</title>
		<style>
			form  { display: table;      }
			p.form{ display: table-row;  }
			label { display: table-cell; }
			input { display: table-cell; }
		</style>
	</head>
	<body>
		<h1>Wertetabelle als PIR-freundliches Marquee</h1>
		<p>Mit diesem PHP-Script kann für einen Ausdruck mit einer unbestimmten Variable (x) die Wertetabelle als Laufschrift (HTML-Marquee) erzeugt werden, um so den oder die tatsächlich relevanten Werte abzulesen, ohne diese offenzulegen. Es werden die Grundrechenarten, einige wichtige Funktionen und Konstanten aus der Mathematik und Physik unterstützt. <a href="help.php">Detaillierte Anleitung</a></p>
		<p><strong>Hinweis: </strong>Die Dezimaltrennung erfolgt mit dem Punkt, nicht mit dem Komma. So wird bspw.&nbsp;die Kreiszahl&nbsp;pi&nbsp;3.14 geschrieben, <u>nicht</u> 3,14</p>
		<form method="post" action="result.php">
			<p class="form">
				<label for="eval">Term:</label>
				<input type="text" name="eval" placeholder="x^2*3.42-x*-0.48"/><br/>
			</p>
			<p class="form">
				<label for="xmin">Minimum von x:</label>
				<input type="numeric" name="xmin" placeholder="-25"/><br/>
			</p>
			<p class="form">
				<label for="xmax">Maximum von x:</label>
				<input type="numeric" name="xmax" placeholder="25"/><br/>
			</p>
			<p class="form">
				<label for="xival">Intervallschritt von x:</label>
				<input type="numeric" name="xival" placeholder="0.1"/><br/>
			</p>
			<p class="form">
				<label for="len">Anzahl der Nachkommastellen:</label>
				<input type="numeric" name="len" placeholder="2" value="2"><br/>
			</p>
			<p>
				<button type="submit">Auswerten</button>
			</p>
		</form>
		<p><small>Version 0.1.0-alpha</small></p>
	</body>
</html>