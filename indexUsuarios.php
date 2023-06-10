<?php

    require_once "usuarios/usuarios_listar.php";

    switch ($_SERVER['REQUEST_METHOD']) {
        case 'GET':
            echo json_encode(listarUsuarios::listarUsuarios());
            break;
        
        default:
            # code...
            break;
    }

?>