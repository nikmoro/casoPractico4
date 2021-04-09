<?php
    header('Content-Type: text/xml; charset=UTF-8');

    require_once 'nusoap.php';
    $client = new nusoap_client("http://localhost/cp4/server.php");

    $error = $client -> GetError();
    if($error)
        echo "<h2>Error en el constructor</h2> <pre>" . $error . "</pre>";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Paciente</title>
</head>
<body>
    <?php
        $result = $client -> call("obtenerPaciente");

        if($client -> fault)
        {
            echo "<h2>Fault</h2><pre>";
            print_r($result);
            echo"</pre>";
        }
        else
        {
            $error = $client -> getError();
            if ($error) {
                echo "<h2>Error</h2> <pre>" . $error . "</pre>";
            }
            else
            {
                echo "<h2>PACIENTES</h2><pre>";
                echo $result;
                echo"</pre>";
            }
        }
    ?>
</body>
</html>