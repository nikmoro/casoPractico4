<?php
    class Paciente
    {
        public function obtenerPaciente()
        {
            $registros = "";

            $con = new mysqli("localhost","root","","cp4") or die ("Error al conectarse a la Base de datos");
            $query = "SELECT * FROM paciente";
            $result = mysqli_query($con, $query);

            foreach ($result as $datos) {
                $registros .= ("<tr>");
                $registros .= ("<td>" . $datos['id'] . "</td>");
                $registros .= ("<td>" . $datos['nombre'] . "</td>");
                $registros .= ("<td>" . $datos['edad'] . "</td>");
                $registros .= ("<td>" . $datos['telefono'] . "</td>");
                $registros .= ("</tr>");
            }
            return $registros;
        }
    }
    try
    {
        $server = new Soapserver(
            null, ['uri' => 'http://localhost/cp4/server.php']
        );
        $server -> setClass("Paciente");
        $server -> handle();
    }
    catch(SoapFault $e){
        print $e -> faultstring;
    }
?>