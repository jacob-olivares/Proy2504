<?php

$miconn = new myqli("10.20.26.58","root","avaras08","datospersonales");
        
        if($miconn-> connect_errno){
            echo "fallo al conectar a MySQL: (". $miconn-> connect_errno . ") " .$miconn->connect_errno;
        }
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$infoconexion = $miconn->client_info;

$sql="INSERT INTO persona(nombre,apellido,host) VALUES ('$nombre','$apellido');";

$sqlip = "select host from information_schema.processlist WHERE ID=connection_id();";
$resultado = $miconn->query($sqlip);

/*CONSULTAS DE SELECCION QUE DEVUELVEN UN CONJUNTO DE RESULTADOS*/

if($resultado = $miconn->query($sql)){
    /* LIBERAR EL CONJUNTO DE RESULTADOS*/
    $resultado->close();
}
