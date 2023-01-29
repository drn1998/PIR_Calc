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

function sum(...$arguments) {
	return array_sum($arguments);
}

function avg(...$arguments) {
	if(count($arguments) > 0)
		return array_sum($arguments)/count($arguments);
	else
		return NAN;
}

function cbrt($val) {
	return $val ** (1/3);	
}