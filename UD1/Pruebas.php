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

        <?php
        //Ejemplo para saber si la variable creada esta definida o no esta definida y como eliminarle el valor para que ya no este definida
        $a = "3.1416";

        if (isset($a)) // la variable $a está definida
            unset($a); //ahora ya no está definida
        ?> 
        <p>Ejemplo de creación de constantes</p>
        <?php
        define("PI", 3.1416);
        print "El valor de PI es " . PI; //El identificador se reconoce tanto por PI como por pi
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

        <p>Ejemplo de una funcion dentro de una condición y como se puede observar, no podemos llamar a la funcion antes del condicional ya que no la encuentra porque el condicional no se ha ejecutado.<p/>
        <?php
        $iva = true;
        $precio = 10;
//        precio_con_iva();               // Da error, pues aquí aún no está definida la función
        if ($iva) {

            function precio_con_iva() {
                global $precio;
                $precio_iva = $precio * 1.18;
                print "El precio con IVA es " . $precio_iva;
            }

        }
        precio_con_iva();               // Aquí ya no da error
        ?>
        <p>Ejemplo de include_once:</p>
        <?php
//        print "Asignatura $asignatura1 del ciclo $modulo1";       //Aqui dara error porque no he hecho la llamada al fichero
        include_once './ficheros/definiciones.php';
        print "Asignatura $asignatura1 del ciclo $modulo1";
        ?>
        <br>
        <p>Ejemplo de creacion de arrays:</p>
        <?php
        // array numérico
        $modulo1 = array(1, 2, 3, 4, 5);
        $modulo2 = [2, 4, 6, 8];
        print_r($modulo2); //Única forma ,para mostar arrays 
        ?>
        <br>
        <p>Ejemplo de array con cadena de texto</p>
        <?php
        $modulo2 = ["Hola mundo", "Bienvenido", "¿Que tal tu día?"];
        print_r($modulo2); //Única forma ,para mostar arrays 
        ?>
        <br>
        <p>Ejemplo de array asociativo</p>
        <?php
        //array asociativo
        $modulo2 = ["Nombre" => "José", "Primer apellido" => "Martínez", "Segundo apellido" => "Estrada"];
        print_r($modulo2); //Única forma ,para mostar arrays 
        ?>
        <br>
        <p>Ejemplo de devolución de valor pasando el nombre de la clave:</p>
        <?php
        print_r($modulo2["Nombre"]);
        ?>
        <br>
        <p>Array mezclado</p>
        <?php
        $modulo3 = ["Nombre" => "José", "Pepe", "Como", "Verbo" => "estás"];
        print_r($modulo3);
        ?>
        <p>Los valores del array se pueden sobreescribir en cualquier momento, por ejemplo vamos a borrar el valor como, por González</p>
        <?php
        $modulo3[1] = "González";
        print_r($modulo3);
        ?>
        <p>Ejemplo de foreach con arrays en php solo valor</p>
        <?php
        //Para recorrer arrays SOLO se deben recorrer con for each, pero no el foreach que conocemos de Java sino este foreach
        /* foreach ($array as $valorIterador) {
         * echo $valoriterador;
          } */
        foreach ($modulo2 as $iterador) {
            echo sprintf("%s  ", $iterador);
        }
        ?>
        <p>Ejemplo de foreach con arrays en php clave y valor</p>
        <?php
        foreach ($modulo2 as $cadaClave => $cadaValor) {
            echo sprintf("%s: %s,  ", $cadaClave,$cadaValor);
        }
        ?>
    </body>
</html>
