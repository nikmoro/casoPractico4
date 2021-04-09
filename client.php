<?php
    $cliente = new SoapClient(null, array(
    'location' => "http://localhost/cp4/server.php",
    'uri' => "http://localhost/cp4/server.php",
    'trace' => 1
    ));
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <table border="1" class="">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Teléfono</th>
            </tr>
        </table>

        <?php
            try
            {
                echo $respuesta = $cliente -> __soapCall("obtenerPaciente", []);
            }
            catch (SoapFault $ex)
            {
                echo $ex -> getMessage().PHP_EOL;
            }
        ?>
    </body>
    </html>