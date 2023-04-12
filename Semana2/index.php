<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3>Nombres:</h3>
        <?php
            echo "Julian David <br/>";
        ?>
        <h3>Apellidos:</h3>
        <?php
            echo "Camacho Erazo <br/>";
        ?>
        
        <h3>Numero de Tel&eacutefono:</h3>
        <?php
            echo "3147242572 <br/>";
        ?>
        
        <h3>Direcci&oacuten:</h3>
        <?php
            echo "Calle 28 CNORTE<b> Numero 6A-08<b> <br/>";
        ?>
        
        <!-- Otras forma de escribir salidas en PHP -->
        <?php echo "Mi pagina web <br/>"; ?>
        
        <?= "Mi pagina web <br/>"; ?>
        
        <?php
            /*Comentarios en PHP*/
        ?>
        
        <?php
            /*Utilizacion de variables*/
            $var1 = 10;
            $var2 = 20;
            $var3 = $var1 + $var2;
            echo "La suma es: $var3 <br/>";
            
            /*Uso de costantes*/
            define('MI_CONSTANTE',20);
            echo "Valor de la constante es:".MI_CONSTANTE. "<br/>";
        ?>
        
        <?php
            /*Uso de vectores*/
            $estudiantes = array('Julian','Carlos','Simon');
            echo "Estudiante: "."$estudiantes[0]<br/>";
        ?> 
        
    </body>
</html>
