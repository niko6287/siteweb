<?php


print( "Les Boucles (loop) <br>" );

$numero_ligne_texte = 1;



print( "<hr>")		; 

for(  $numero_ligne_texte = 1  ;  // initialisation
	  $numero_ligne_texte < 20 ;  // condition
	  $numero_ligne_texte += 3    // incrémentation
	)
{
	print( 	"page n° ".$numero_ligne_texte );
	print( "<br>")		; 
} 

print( "<hr>")		; 

for(  $a = 1  ;  $a < 20 ; $a += 2	)
{
	print( 	"valeur de a = ".$a );
	print( "<br>")		; 
} 

print( "<hr>")		; 

for(  $a = 20  ;  $a > 1 ; $a -= 3	)
{
	print( 	"valeur de a = ".$a );
	print( "<br>")		; 
} 

print( "<hr>")		; 

for(  $a = 1  ;  $a < 10 ; $a++	)
{
	print( 	"valeur de a = ".(($a*2)+1) );
	print( "<br>")		; 
} 

print( "<hr>")		; 

for(  $a = 1  ;  $a < 20 ; $a++	)
{
	if ( $a%2 == 0 )
	{
		print( 	"valeur de a = ".$a );
		print( "<br>")		; 
	}
} 



print( gettype($numero_ligne_texte) ); 

?>