<?php

    include 'conexiondb.php';
    $pdo=new conexion();

    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: access");
    header("Access-Control-Allow-Methods: GET");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    if($_SERVER['REQUEST_METHOD']=='GET'){

        if (isset($_GET["listarUsuarios"])){
            $sql="SELECT id_usuario, nombre_usuario, apellido_usuario, idCategoria_usuario FROM usuarios";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();       
            header("HTTP/1.1 200 OK");
            exit;
            }
            else{ echo json_encode(["success"=>0]); }
    }

?>