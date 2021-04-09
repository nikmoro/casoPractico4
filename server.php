<?php
    phpinfo();
    
    require_once 'nusoap.php';

    function obtenerPaciente()
    {
        $con = mysqli_conect("localhost","root","","cp4") or die ("Error al conectarse a la Base de datos");
        $query = "SELECT * FROM paciente";
        $result = mysqli_query($con, $query);
        $registro = mysqli_fetch_assoc($result);
        return $registro;
    }

    $server = new soap_server();
    $server -> register("obtenerPaciente");

    if(!isset($HTTP_RAW_POST_DATA)) $HTTP_RAW_POST_DATA = file_get_contents('php://input');
    $server -> service($HTTP_RAW_POST_DATA);
?>