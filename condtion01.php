<?php


print( "Les Conditions (if) <br>" );

print( "<hr>")		; 

$nom = "toto";
$age = 16;


print("bonjour ".$nom);
print( "<br>");
print("tu as ".$age." ans" );


print( "<br>");

if (  $age >= 18 )
{
	print( "tu es majeur");
	print( "tu peux rentrer en boite");
}
else
{
	print( "tu es mineur");
}
print( "<br>");

$nom = "titi";
$age = 19;


if (  $age > 9 and $age < 13 and $nom != "toto")
{
	print( "tu peux aller sur le tobogan");
}


print( "<br>");
$argent = 11;
if (  $age > 17 && $argent == 10 )
{
	print( "tu peux acheter ta bouteille");
}


print( "<br>");
$age = 5;
$argent = 1000;
if (  $age > 17 || $argent > 500 )
{
	print( "tu peux quand même acheter ta bouteille");
}









?>