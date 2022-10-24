<?php 

function cancion($frase,$vocal){
	$vocales = ["a","e","i","o","u"];
	
	for ($i = 0; $i < strlen($frase); $i++){

		for ($j = 0; $j < count($vocales); $j++){
	
			if (in_array( $frase[$i],$vocales)){
			
			$frase[$i] = $vocal;
			
				
			
			}
			
		
		}
		
		
	}

	return $frase.' ';

}

$frase = "el sapo no se lava el pie";
$vocal = "u";
	
echo cancion($frase,$vocal);
