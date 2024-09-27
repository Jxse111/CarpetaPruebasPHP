<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejemplo de variables con resultado</title>
    </head>
    <body>
        <p>Operación de suma con resultado real</p>
        <p>El resultado de la suma de los numeros es: </p>
        <?php
        $num_1 = 4;
        $num_2 = 5.5;
        //Realizamos una operacion de suma cuyo resultado es un real.
        $resultado_real = $num_1 + $num_2;
        echo $resultado_real;
        ?>
        <p>Operación de suma con resultado entero</p>
        <p>El resultado de la suma de los numeros es: </p>
        <?php
        //Realizamos una operacion de suma cuyo resultado es un entero.
        $resultado_entero = $num_1 + (int) $num_2;
        echo $resultado_entero;
        ?>
        <p>Creamos una funcion que nos va a devolver el valor del numero 3
            que sera el mismo que el numero 1(global) que es el que hemos creado mas arriba.</p>
        <?php

        function prueba() {
            global $num_1;
            $num_3 = $num_1;
            echo $num_3;
        }

        echo prueba();

        //Creamos una funcion con un numero estatico el cual se va a ejecutar la primera vez que la llamemos y lo incrementara cada que vez que se ejecute la funcion.
        function prueba_2() {
            static $num_contador = 0;
            $num_contador++;
            echo $num_contador;
        }
        ?>
        <p>Ejecutamos la funcion prueba 2 para ver el numero incrementandose.</p>
        <?php
        echo prueba_2();
        ?>
        <br>
        <br>
        <p>Sumar la misma variable:<p>
            <?php
            $num = 10;
            echo $num + $num;
            ?>
        <p>Suma de una cadena de texto númerica y un número entero;<p/>
        <?php
        $num1 = "10";
        $num2 = 50;
        echo $num1 + $num2;
        ?>

        <p> Ejemplo de cadena de texto formateada:
            <?php
            $ciclo = "DAW";
            $modulo = "DWES";
            printf("%s es un módulo de %d curso de %s", $modulo, 2, $ciclo);
            ?> 
        </p>

        <p> Ejemplo de cadena de texto con comillas simples:
            <?php
            $nombre = "Juan";
            echo $cad1 = 'Hola,$nombre';
            ?>    
        <p/>
        <p>Ejemplo de cadena de texto con comillas dobles: 
            <?php echo $cad2 = "Hola,$nombre"; ?>
        <p>
        <p>Ejemplo de concatenación, a diferencia de java se utiliza el .(punto) y no el método concat.</p>
        <?php
        $a = "Hola";
        $b = $a . ",soy José";
        echo $b;
        ?>
        <br/>
        <p>Ejemplo de el uso de heredoc:</p>
        <?php
        $a = <<<MICADENA
            Ejemplo de Prueba con un heredoc (<<<(nombreDeLaVariable))<br/>
                    
            Desarrollo de Aplicaciones Web<br />

            Desarrollo Web en Entorno Servidor

            MICADENA;

        print $a;
        ?> 

        <p>Ejemplo de settype y gettype</p>
        <?php
        $a = $b = "3.1416"; // asignamos a las dos variables la misma cadena de texto

        settype($b, "float"); // y cambiamos $b a tipo float

        print "\$a vale $a y es de tipo " . gettype($a);

        print "<br />";

        print "\$b vale $b y es de tipo " . gettype($b);
        ?> 



    </body>
</html>
