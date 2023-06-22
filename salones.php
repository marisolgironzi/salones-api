<?php

    require_once 'conexiondb.php';

    class Salones {

        public static function listarSalones(){
            $db = new Conexion();
            $query = "SELECT * FROM salones";
            $resultado = $db->query($query);
            $datos = [];

            if($resultado->num_rows){
                while($row = $resultado -> fetch_assoc()){
                    $datos[] = [
                        'id_salon'=>$row['id_salon'],
                        'nombre_salon'=>$row['nombre_salon'],
                        'capacidad_desde'=>$row['capacidad_desde'],
                        'capacidad_hasta'=>$row['capacidad_hasta']
                    ];
                }
                return $datos;
            }
            return $datos;
        }

        public static function consultarSalonporId($id_salon){
            $db = new Conexion();
            $query = "SELECT * FROM salones WHERE id_salon=$id_salon";
            $resultado = $db->query($query);
            $datos = [];

            if($resultado->num_rows){
                while($row = $resultado -> fetch_assoc()){
                    $datos[] = [
                        'id_salon'=>$row['id_salon'],
                        'nombre_salon'=>$row['nombre_salon'],
                        'capacidad_desde'=>$row['capacidad_desde'],
                        'capacidad_hasta'=>$row['capacidad_hasta']
                    ];
                }
                return $datos;
            }
            return $datos;
        }

        public static function insertarSalon($nombre_salon, $capacidad_desde, $capacidad_hasta){
            $db = new Conexion();
            $query = "INSERT INTO salones (nombre_salon, capacidad_desde, capacidad_hasta)
                VALUES ('".$nombre_salon."', ".$capacidad_desde.", ".$capacidad_hasta.")";
            $db->query($query);
            
            if ($db->affected_rows) {
                return TRUE;
            }
            return FALSE;
        }

        public static function modificarSalon($id_salon, $nombre_salon, $capacidad_desde, $capacidad_hasta){
            $db = new Conexion();
            $query = "UPDATE salones SET
                nombre_salon='".$nombre_salon."', capacidad_desde=".$capacidad_desde.", capacidad_hasta=".$capacidad_hasta."
                WHERE id_salon=$id_salon";
            $db->query($query);
            
            if ($db->affected_rows) {
                return TRUE;
            }
            return FALSE;
        }

        public static function borrarSalon($id_salon){
            $db = new Conexion();
            $query = "DELETE * FROM salones WHERE id_salon=$id_salon";
            $db->query($query);
            if ($db->affected_rows) {
                return TRUE;
            }
            return FALSE;
        }
    }

?>