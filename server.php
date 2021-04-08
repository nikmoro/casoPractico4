<?php

require_once ('lib/nusoap.php');

// Conexión y seleción de la BD
$con = mysql_conect("localhost","root","") or die ("Error al conectarse a la Base de datos");
mysql_select_db("cp4", $con) or die ("Error al seleccionar la Base de datos");

$server = new soap_server();

function ConectarDB(){
    /* conectamos a la bd */
    $link = mysql_connect('localhost','root','') or die('No se puede conectar a la BD');
    mysql_select_db('PacienteDB',$link) or die('No se puede seleccionar la BD');
}

function Insertar(){

}
?>