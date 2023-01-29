<!DOCTYPE html>
<html>
	<head>
		<title>Hilfe - Wertetabelle</title>
	</head>
	<body>
		<h1>Anleitung und Beispiele des PIR-freundlichen Wertetabellengenerators</h1>
		<h2>Einsatzzweck</h2>
		<p>Das Script dient der Berechnung von Werten einer Funktion mit eingesetzter Variable x, wobei es insbesondere darauf ausgelegt ist, dass x vertraulich ist, und daher die Eingabe in den Computer vermieden wird. So kann für alle möglichen Werte x das Ergebnis der Funktion berechnet, und der tatsächlich relevante Wert für x abgelesen werden. Durch die Darstellung als Laufschrift soll gewährleistet werden, dass auch unter dem Angriffsmodell, dass der Client (und nicht nur etwa die Netzwerkverbindung) kompromittiert ist, nicht bestimmt werden kann, welcher Wert von x tatsächlich gesucht ist (ohne die Laufschrift könnte bspw. durch das Scrollverhalten, die Position des Mauszeigers oder auch den Berührungen auf Touchscreens dies offenbart oder zumindest eingegrenzt werden).</p>
		<h2>Rechenoperationen</h2>
		<p>Als Rechenoperationen werden die Grundrechenarten Addition, Subtraktion, Multiplikation und Division sowie der Modulo-Operator (Bestimmung des ganzzahligen Rests) und die Exponentation unterstützt:</p>
		<ul style="font-family: monospace;">
			<li>48 + 29</li>
			<li>32 - 4</li>
			<li>38 * 83</li>
			<li>82 / 9</li>
			<li>39 % 6</li>
			<li>11 ^ 4</li>
		</ul>
		<p>Negative Zahlen werden unterstützt.</p>
		<p>Die Trennung von ganzzahligen und Kommaanteil erfolgt mit dem Punkt, ausdrücklich nicht mit dem Komma.</p>
		<h2>Funktionen</h2>
		<p>Es stehen diverse Funktionen aus der Trigonometrie und anderen Gebieten zur Verfügung.</p>
		<table>
			<tr>
				<th>Symbol</th>
				<th>Bezeichnung</th>
				<th>Beschreibung</th>
				<th>Anzahl Argumente</th>
			</tr>
			<tr>
				<td>sqrt</td>
				<td>Quadratwurzel</td>
				<td>Die Quadratwurzel einer positiven Zahl</td>
				<td>1</td>
			</tr>
			<tr>
				<td>cbrt</td>
				<td>Kubikwurzel</td>
				<td>Die Kubikwurzel einer positiven Zahl</td>
				<td>1</td>
			</tr>
			<tr>
				<td>sin</td>
				<td>Sinus</td>
				<td>Die Sinusfunktion</td>
				<td>1</td>
			</tr>
			<tr>
				<td>sum</td>
				<td>Summe</td>
				<td>Ungewichtete Summe aller Argumente</td>
				<td>1&nbsp;&hellip;&nbsp;&infin;</td>
			</tr>
			<tr>
				<td>min</td>
				<td>Minimum</td>
				<td>Gibt niedrigsten Wert aller Argumente zurück</td>
				<td>1&nbsp;&hellip;&nbsp;&infin;</td>
			</tr>
			<tr>
				<td>max</td>
				<td>Maximum</td>
				<td>Gibt höchsten Wert aller Argumente zurück</td>
				<td>1&nbsp;&hellip;&nbsp;&infin;</td>
			</tr>
			<tr>
				<td>abs</td>
				<td>Absolutwert</td>
				<td>Gibt den Abstand zu Null als positiven Wert zurück</td>
				<td>1</td>
			</tr>
		</table>
		<h2>Konstanten</h2>
		<p>Einige Konstanten von allgemeiner Relevanz sind vorgegeben.</p>
		<table>
			<tr>
				<th>Symbol</th>
				<th>Bezeichnung</th>
				<th>Wert</th>
			</tr>
			<tr>
				<td>pi</td>
				<td>Kreiszahl pi</td>
				<td>3.14159</td>
			</tr>
			<tr>
				<td>e</td>
				<td>Euler'sche Zahl e</td>
				<td>2.71828</td>
			</tr>
		</table>
		<h2>Sonstiges</h2>
		<p>Das Script nutzt die Funktionsbibliothek <a href="https://github.com/madorin/matex">Matex</a>. Nicht alle Features dessen, insbesondere String-Operationen, werden allerdings zum jetzigen Zeitpunkt auch innerhalb dieses Tools unterstützt!</p>
	</body>
</html>