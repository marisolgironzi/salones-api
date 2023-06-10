<?php

    include 'conexiondb.php';
    // $pdo=new conexion();

    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: access");
    header("Access-Control-Allow-Methods: GET");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    class listarUsuarios {

        public static function listarUsuarios(){
            $db = new conexion();
            $query = "SELECT usuarios.id_usuario, usuarios.nombre_usuario, usuarios.apellido_usuario, usuarios.usuario_usuario, usuarios.cont_usuario, categoria_usuario.nombre_categoria
                FROM usuarios INNER JOIN categoria_usuario ON usuarios.idCategoria_usuario=categoria_usuario.id_categoria;";
            $resultado = $db->query($query);
            $datos = [];

            if($resultado->num_rows){
                while($row = $resultado -> fetch_assoc()){
                    $datos[] = [
                        'id'=>$row['id_usuario'],
                        'nombre'=>$row['nombre_usuario'],
                        'apellido'=>$row['apellido_usuario'],
                        'usuario'=>$row['usuario_usuario'],
                        'contrasenia'=>$row['cont_usuario'],
                        'categoria'=>$row['nombre_categoria'],
                    ];
                }
                return $datos;
            }
            return $datos;

    }

    /*  if($_SERVER['listarUsuarios']=='GET'){

        if (isset($_GET["id"])){
            $sql="SELECT usuarios.id_usuario, usuarios.nombre_usuario, usuarios.apellido_usuario, usuarios.usuario_usuario, usuarios.cont_usuario, categoria_usuario.nombre_categoria
                FROM usuarios INNER JOIN categoria_usuario ON usuarios.idCategoria_usuario=categoria_usuario.id_categoria;";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();       
            header("HTTP/1.1 200 OK");
            exit;
            }
            else{ echo json_encode(["success"=>0]); } */
    }

?>