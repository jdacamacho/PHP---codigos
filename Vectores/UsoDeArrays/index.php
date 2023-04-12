<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Manejo de arrays</title>
    </head>
    <body>
        <?php
            /*Creo que la cabecera*/
            $cabecera=array("Nombre","Direccion","Telefono","Fecha_de_Cump","Color_Fav","Significado");
            /*Creo los usuarios*/
            $julian=array("Julian Camacho","Calle 1","3147242572","25/25/25","Azul","Cielo");
            $camilo=array("Camilo Bonilla","Calle 2","31785940","25/25/25","Rojo","Fuego");
            $carlos=array("Carlos Mesa","Calle 3","123456789","25/25/25","Azul","Cielo");
            $simon=array("Simon Guzman","Calle 4","123456789","25/25/25","Amarillo","Sol");
            $laura=array("Laura Recalde","Calle 5","123456789","25/25/25","Azul","Cielo");
            $carolina=array("Carolina Solarte","Calle 6","123456789","25/25/25","Rojo","Fuego");
            $sofia=array("Sofia Lopez","Calle 7","123456789","25/25/25","Amarillo","Sol");
            /*Creo un array de usuarios donde se almacenara la cabecera y los usuarios*/
            $usuarios = array($cabecera,$julian,$camilo,$carlos,$simon,$laura,$carolina,$sofia);
        ?>
        
        <div>
            <h1>Tabla de usuarios General</h1>
            <table border="1" width="60%" cellspacing="0">
                <?php
                    /*Recorro el vector de usuarios y los voy agregando a una tabla*/
                    foreach($usuarios as $usuario){
                        /*Creo una fila*/
                        $concat = '';
                        $concat .= '<tr>';
                        /*Para cada usuario agrego su informacion en una fila de la tabla*/
                        for($i = 0 ; $i<sizeof($usuario); $i++){
                            /*Cada dato que halla en usuario lo voy agregando a una columna*/
                            $concat .= '<td>' . $usuario[$i] .'</td>';
                        }
                        /*Cierro la fila*/
                        $concat .= '</tr>';
                        /*Imprimo la fila*/
                        echo "$concat <br/>";
                    }
                ?>
            </table>
        </div>
        
        <div>
            <h1>Tabla de usuarios color rojo</h1>
            <table border="1">
                <?php
                    /*Obtengo cada usuario del vector usuarios*/
                    foreach($usuarios as $usuario){
                        /*Creo una fila*/
                        $concat = '';
                        $concat .= '<tr>';
                        for($i = 0 ; $i<sizeof($usuario); $i++){
                            /*Reviso si la informacion en la primera posicion del vector es igual a nombre*/
                            /*Esto lo hago para que tenga en cuenta el encabezado tambien*/
                            if($usuario[0] == "Nombre"){
                                /*Agrego cada elemento en una columna*/
                                $concat .= '<td>' . $usuario[$i] .'</td>';
                            }
                            else{
                                /*De caso contrario ya no estaria en la cabecera*/
                                /*Reviso si en la posicion cuatro donde se encuentra el color es igual al que deseo*/
                                if($usuario[4] == 'Rojo'){
                                    /*agrego sus elementos a las columnas*/
                                    $concat .= '<td>' . $usuario[$i] .'</td>';
                                }
                                else{
                                    /*De caso contrario que siga el flujo de trabajo*/
                                    continue;
                                }
                            }
                        }
                        /*cierro la fila*/
                        $concat .= '</tr>';
                        /*Imprimo la fila*/
                        echo "$concat <br/>";
                    }
                ?>
            </table>
        </div>
        
        <div>
            <h1>Tabla de usuarios color amarillo</h1>
            <table border="1">
                <?php
                    /*Obtengo cada usuario del vector usuarios*/
                    foreach($usuarios as $usuario){
                        /*Creo una fila*/
                        $concat = '';
                        $concat .= '<tr>';
                        for($i = 0 ; $i<sizeof($usuario); $i++){
                            /*Reviso si la informacion en la primera posicion del vector es igual a nombre*/
                            /*Esto lo hago para que tenga en cuenta el encabezado tambien*/
                            if($usuario[0] == "Nombre"){
                                /*Agrego cada elemento en una columna*/
                                $concat .= '<td>' . $usuario[$i] .'</td>';
                            }
                            else{
                                /*De caso contrario ya no estaria en la cabecera*/
                                /*Reviso si en la posicion cuatro donde se encuentra el color es igual al que deseo*/
                                if($usuario[4] == 'Amarillo'){
                                    /*agrego sus elementos a las columnas*/
                                    $concat .= '<td>' . $usuario[$i] .'</td>';
                                }
                                else{
                                    /*De caso contrario que siga el flujo de trabajo*/
                                    continue;
                                }
                            }
                        }
                        /*cierro la fila*/
                        $concat .= '</tr>';
                        /*Imprimo la fila*/
                        echo "$concat <br/>";
                    }
                ?>
            </table>
        </div>
        
        <div>
            <h1>Tabla de usuarios color azul</h1>
            <table border="1">
                <?php
                    /*Obtengo cada usuario del vector usuarios*/
                    foreach($usuarios as $usuario){
                        /*Creo una fila*/
                        $concat = '';
                        $concat .= '<tr>';
                        for($i = 0 ; $i<sizeof($usuario); $i++){
                            /*Reviso si la informacion en la primera posicion del vector es igual a nombre*/
                            /*Esto lo hago para que tenga en cuenta el encabezado tambien*/
                            if($usuario[0] == "Nombre"){
                                /*Agrego cada elemento en una columna*/
                                $concat .= '<td>' . $usuario[$i] .'</td>';
                            }
                            else{
                                /*De caso contrario ya no estaria en la cabecera*/
                                /*Reviso si en la posicion cuatro donde se encuentra el color es igual al que deseo*/
                                if($usuario[4] == 'Azul'){
                                    /*agrego sus elementos a las columnas*/
                                    $concat .= '<td>' . $usuario[$i] .'</td>';
                                }
                                else{
                                    /*De caso contrario que siga el flujo de trabajo*/
                                    continue;
                                }
                            }
                        }
                        /*cierro la fila*/
                        $concat .= '</tr>';
                        /*Imprimo la fila*/
                        echo "$concat <br/>";
                    }
                ?>
            </table>
        </div>
        
    </body>
</html>
