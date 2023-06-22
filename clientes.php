<?php

    require_once 'conexiondb.php';

    class Clientes {

        public static function listarClientes(){
            $db = new Conexion();
            $query = "SELECT * FROM clientes";
            $resultado = $db->query($query);
            $datos = [];

            if($resultado->num_rows){
                while($row = $resultado -> fetch_assoc()){
                    $datos[] = [
                        'id_cliente'=>$row['id_cliente'],
                        'nombre'=>$row['nombre'],
                        'apellido'=>$row['apellido'],
                        'mail'=>$row['mail'],
                        'telefono'=>$row['telefono']
                    ]
                }
                return $datos;
            }
            return $datos;
        }

        public static function consultarClienteporId($id_cliente){
            $db = new Conexion();
            $query = "SELECT * FROM clientes WHERE id_cliente=$id_cliente";
            $resultado = $db->query($query);
            $datos = [];

            if($resultado->num_rows){
                while($row = $resultado -> fetch_assoc()){
                    $datos[] = [
                        'id_cliente'=>$row['id_cliente'],
                        'nombre'=>$row['nombre'],
                        'apellido'=>$row['apellido'],
                        'mail'=>$row['mail'],
                        'telefono'=>$row['telefono']
                    ];
                }
                return $datos;
            }
            return $datos;
        }

        public static function insertarCliente($nombre, $apellido, $mail, $telefono){
            $db = new Conexion();
            $query = "INSERT INTO clientes (nombre, apellido, mail, telefono,)
                VALUES ('".$nombre."', '".$apellido."', '".$mail."', '".$telefono."')";
            $db->query($query);
            
            if ($db->affected_rows) {
                return TRUE;
            }
            return FALSE;
        }

        public static function modificarCliente($id_cliente, $nombre, $apellido, $mail, $telefono){
            $db = new Conexion();
            $query = "UPDATE clientes SET
                nombre='".$nombre."', apellido='".$apellido."', mail='".$mail."', telefono='".$telefono."'
                WHERE id_cliente=$id_cliente";
            $db->query($query);
            
            if ($db->affected_rows) {
                return TRUE;
            }
            return FALSE;
        }

        public static function borrarCliente($id_cliente){
            $db = new Conexion();
            $query = "DELETE * FROM clientes WHERE id_cliente=$id_cliente";
            $db->query($query);
            if ($db->affected_rows) {
                return TRUE;
            }
            return FALSE;
        }
    }

?>