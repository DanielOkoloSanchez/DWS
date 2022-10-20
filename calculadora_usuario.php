

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <?php
        ini_set('display_errors', 1);

        ini_set('display_startup_errors', 1);
        
        error_reporting(E_ALL);


        $matrizA = array(
            array(4,0),
            array(4,2),
            
         );
        
         $matrizB =  array(
            array(5,2),
            array(2,1),
           
         );

 $maxFilasA = count($matrizA);

 $maxFilasB = count($matrizB);

$arrayResultado = [];

 for ($fila=0; $fila < $maxFilasA  ; $fila++) { 
    $maxColumnaA = count($matrizA[$fila]);
    for ($columna=0; $columna < $maxColumnaA ; $columna++ ) { 
      
      echo $arrayResultado = $matrizA[$fila][$columna] + $matrizB[$fila][$columna];
    }
   

}


    





    echo "<br><br>";

        require("calculadora.php");
        $respuesta = new Calculadora();

        echo "Factorial = ".$respuesta->Factorial(5);

       

        echo "<br><br>"."Coeficiente binominal = ".$respuesta->coeficienteBinominal(5,4);


        echo "<br><br>"."Conversor de binario a decimal = ".$respuesta->convierteBinarioDecimal('101');

        echo "<br><br>"."Sumar Pares =  ".$respuesta->sumarPares([4,2,3,1]);
       
       
        
        if ($respuesta->palindromo("amor","roma")==TRUE) {
            echo "<br><br>"."Palindromo =  Es palindromo";
        }else {
            echo "<br><br>"."Palindromo = No es palindromo ";
        }
        
    
    ?>
    </div>
</body>
</html>