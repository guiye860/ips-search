<?php
$proceso = $_POST['proceso'];

switch ($proceso) {
    case 1:
        generar_ventana($_POST['cod']);
        break;
    case 2:
        echo 'opcion 2';
        break;
    default:
        break;
}
?>

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

        function generar_ventana($cedula) {

            $codigo = base64_encode($cedula);

            $url = "http://servicios.ips.gov.py/nomina/datos.php?cod=$codigo";
            ?>
            <object type="text/html" data="<?php echo $url; ?>" width="450" height="650"></object>
            <?php
        }
        ?>
    </body>
</html>
