<?php

    include 'conexiondb.php';
    $pdo=new conexion();

    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: access");
    header("Access-Control-Allow-Methods: GET");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
/* 
    if($_SERVER['REQUEST_METHOD']=='GET'){

        //Por id_usuario

        if(isset($_GET['consultarUsuarioporId'])){
            $sql=$pdo->prepare("SELECT * FROM usuarios WHERE id_usuario=:id_usuario");
            $sql->bindValue(':id_usuario',$_GET['id_usuario']);
            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_ASSOC);
            header("HTTP/1.1 200 OK");
            echo json_encode($sql->fetchAll());
            exit;
        }
        else{
            $sql=$pdo->prepare("SELECT id_usuario, nombre_usuario, apellido_usuario, idCategoria_usuario FROM usuarios");
            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_ASSOC);
            header("HTTP/1.1 200 OK");
            echo json_encode($sql->fetchAll());
            exit;
        }


        //Por nombre y apellido
        if(isset($_GET['consultarUsuarioporNombreCompleto'])){
            $sql=$pdo->prepare("SELECT * FROM usuarios WHERE nombre_usuario=:nombre_usuario AND apellido_usuario=:apellido_usuario");
            $sql->bindValue(':id_usuario',$_GET['id_usuario']);
            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_ASSOC);
            header("HTTP/1.1 200 OK");
            echo json_encode($sql->fetchAll());
            exit;
        }
        else{
            $sql=$pdo->prepare("SELECT id_usuario, nombre_usuario, apellido_usuario, idCategoria_usuario FROM usuarios");
            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_ASSOC);
            header("HTTP/1.1 200 OK");
            echo json_encode($sql->fetchAll());
            exit;
        }

        //Por usuario
        if(isset($_GET['consultarUsuarioporUsuario'])){
            $sql=$pdo->prepare("SELECT * FROM usuarios WHERE usuario_usuario=:usuario_usuario");
            $sql->bindValue(':id_usuario',$_GET['id_usuario']);
            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_ASSOC);
            header("HTTP/1.1 200 OK");
            echo json_encode($sql->fetchAll());
            exit;
        }
        else{
            $sql=$pdo->prepare("SELECT id_usuario, nombre_usuario, apellido_usuario, idCategoria_usuario FROM usuarios");
            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_ASSOC);
            header("HTTP/1.1 200 OK");
            echo json_encode($sql->fetchAll());
            exit;
        }

        //Por nombre_categoria
        if(isset($_GET['consultarUsuarioporCategoria'])){
            $sql=$pdo->prepare("SELECT usuarios.*, categoria_usuario.nombre_categoria FROM usuarios 
                                INNER JOIN categoria_usuario ON usuarios.idCategoria = categoria_usuario.id_categoria
                                WHERE nombre_categoria = "administrador"");
            $sql->bindValue(':idCategoria',$_GET['idCategoria']);
            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_ASSOC);
            header("HTTP/1.1 200 OK");
            echo json_encode($sql->fetchAll());
            exit;
        }
        else{
            $sql=$pdo->prepare("SELECT id_usuario, nombre_usuario, apellido_usuario, idCategoria_usuario FROM usuarios");
            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_ASSOC);
            header("HTTP/1.1 200 OK");
            echo json_encode($sql->fetchAll());
            exit;
        }

    } */

?>