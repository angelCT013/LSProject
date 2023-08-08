<?php
                echo json_encode('ajax');
return false;
    include('../routes/mycontrolador.php');
    $conn = BDconexion();

    $consulta = $_POST['tipo'];

    echo json_encode('aa');
    switch ($consulta) {
        case 'productos':
            echo json_encode('ajax');

            break;

        default:
            # code...
            break;
    }



?>
