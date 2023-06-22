<?php

    require_once 'conexiondb.php';

    class Usuarios {

        public static function listarUsuarios(){
            $db = new Conexion();
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

        public static function consultarUsuarioporId($id_usuario){
            $db = new Conexion();
            $query = "SELECT * FROM usuarios WHERE id_usuario=$id_usuario";
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

        public static function insertarUsuario($nombre, $apellido, $usuario, $contrasenia, $categoria){
            $db = new Conexion();
            $query = "INSERT INTO usuarios (nombre, apellido, usuario, cont_usuario, id_categoria)
                VALUES ('".$nombre."', '".$apellido."', '".$usuario."', '".$contrasenia."', ".$categoria.")";
            $db->query($query);
            
            if ($db->affected_rows) {
                return TRUE;
            }
            return FALSE;
        }

        public static function modificarUsuario($id_usuario, $nombre, $apellido, $usuario, $contrasenia, $categoria){
            $db = new Conexion();
            $query = "UPDATE usuarios SET
                nombre='".$nombre."', apellido='".$apellido."', usuario='".$usuario."', cont_usuario'".$contrasenia."', id_categoria=".$categoria."
                WHERE id_usuario=$id_usuario";
            $db->query($query);
            
            if ($db->affected_rows) {
                return TRUE;
            }
            return FALSE;
        }

        public static function borrarUsuario($id_usuario){
            $db = new Conexion();
            $query = "DELETE * FROM usuarios WHERE id_usuario=$id_usuario";
            $db->query($query);
            if ($db->affected_rows) {
                return TRUE;
            }
            return FALSE;
        }
    }

?>