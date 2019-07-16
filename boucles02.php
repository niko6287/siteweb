<?php

print( "<style>");
//print( ".pair");
//print( "{ 	background-color: grey; }");

print( "tr:nth-child(even) {background: #CCC}");
print( "tr:nth-child(odd) {background: #FFF}");

print( "</style>");


print( "Les Boucles (loop) <br>" );

print("<table border=\"1\">");
print("<th>°C</th><th></th><th>°F</th>");

	for ( $degC = -20 ; $degC < 50 ; $degC++ )
	{
		//if ( $degC%2 == 1 )
			print("<tr>\n");
		//else
		//	print("<tr class=\"pair\">\n");

		$degF = $degC * 1.8 + 32;
		print( "<td>".$degC."</td><td>=</td><td>".$degF."</td>\n");
		print("</tr>\n");
	}
print("</table>");

?>