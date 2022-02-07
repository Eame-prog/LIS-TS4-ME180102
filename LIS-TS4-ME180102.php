<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guia semana 3</title>
</head>
<body>
    <form method="post">
        <input type="text" name="numero1" id="numero1">
        <br><br>
        <input type="submit" name="mostrar" value="Mostrar resultados">
        <br><br>
    </form>
</body>
</html>

<?php 
    if((!empty($_POST["numero1"]) && isset($_POST["mostrar"]))){

        $numero=$_POST["numero1"];




        //Numeros pares del 1 al 100 (Usando for)
        echo "Numeros pares desde el 1 hasta el 100 <br>";
        for($i=1; $i<=100; $i=$i+1){
            
            if(($i % 2) == 0)
            {
                echo $i. " - ";
            }
        }





        //Tabla de multiplicar de 5 en 5, hasta el 100 (Usando do wile)
        echo "<br><br><br>";
        echo "Tabla de multiplicar de 5 en 5, hasta el 100 <br>";

        $Contador = 5;
        do{  
            echo $numero. " x " .$Contador. " = " .($numero * $Contador). "<br>";
            $Contador+=5;
        }while($Contador<=100);



        //Mostrar lista de frutas (Usando foreach)
        echo "<br><br><br>";
        echo "Lista de frutas <br>";

        $Frutas=array("Limón","Coco","Guayaba","Mango","Kiwi","Arándano ","Durazno","Higos","Banana","Fresa");
        
        foreach($Frutas as $dato){
            echo "  -" .$dato. "<br>";
        }
    }
    else{
        echo "Ingrese un numero en el campo inicial";
    }
?>