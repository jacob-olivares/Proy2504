<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        
        <?php
        
       // var_dump($_SERVER);
         $miconn=new mysqli("10.20.25.214", "root", "avaras08", "datospersonales");
                   
         echo $miconn->host_info;
         
         echo "<br>";
         
         echo $miconn->client_info;
         echo "<br>";
         echo $miconn->info;
         echo "<br>";
         echo $miconn->get_client_info();
         echo "<br>";
        
         
         if ($miconn->connect_errno) {
            echo "Fallo al conectar a MySQL: (" . $miconn->connect_errno . ") " . $miconn->connect_error;
            }
            echo $miconn->host_info . "\n";
            
            /* Consultas de selección que devuelven un conjunto de resultados */
            if ($resultado = $miconn->query("SELECT * FROM persona"))
                echo "La selección devolvió N°". $resultado->num_rows."filas";
                /* liberar el conjunto de resultados */
                $resultado->close();
        ?>
    </body>
</html>