<?php
    class Calculadora{
        
        
    

    function Factorial($x){
        if ($x == 0){
 
            return 1;
        }
        elseif ($x > 0) {
            $result = 1;
            while ($x > 0) {
                $result = $result * $x;
                $x = $x - 1;
                
        }
        return $result;
        }
        }
       



    function coeficienteBinominal($n,$k){
        $resultado = ($this->Factorial($n))/($this->Factorial($k)*$this->Factorial($n - $k));
        return $resultado;

        

    }

    function convierteBinarioDecimal($cadenaBits){
        
    

            $potencia = strlen($cadenaBits)-1;
            $i = 0;
            $total = 0;
            while($potencia >= 0) { 

                
            
              if ($cadenaBits[$i] == "1") {
                   $total = $total + 2**$potencia;
                   
              }
             
              
              $potencia --;
              $i++;

              
              }
      
              return $total;
    
        
       
    }


  function sumarPares($numeros){
    $total = 0;
 
        for ($i=0; $i<count($numeros) ; $i++) { 
            if ($numeros[$i] % 2 == 0 ) {
                $total = $total + $numeros[$i];
            }
 }

 return $total;

    
    
    }

    

function palindromo($posiblePalindromo,$comparar) {
    if (strrev($posiblePalindromo)==$comparar) {
       return TRUE;
    }else {
        return FALSE;
    }
}





}