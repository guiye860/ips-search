<?php

$proceso = $_POST['proceso'];

switch ($proceso) {
    case 1:
        generar_ventana($_POST['cod']);
        break;
    default:
        break;
}

function generar_ventana($cedula){
    
    $codigo = base64_encode($cedula);
    
    $url = "http://servicios.ips.gov.py/nomina/datos.php?cod=$codigo";
    ?>
<a onclick="open_window('<?php echo $url; ?>');" href="#ver_resultado" class="btn btn-info">Ver Resultado</a>
    <?php
}
?>