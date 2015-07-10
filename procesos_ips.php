<?php

$proceso = $_POST['proceso'];

switch ($proceso) {
    case 1:
        generar_ventana($_POST['cod']);
        break;
    case 2;
        
        break;

    default:
        break;
}

function generar_ventana($cedula){
    
    $codigo = base64_encode($cedula);
    
    $url = "http://servicios.ips.gov.py/nomina/datos.php?cod=$codigo";
    ?>
<object type="text/html" data="<?php echo $url; ?>" width="450" height="650"></object>
    <?php
}
?>