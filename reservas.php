<?php

    require_once 'conexiondb.php';

    class Reservas {

        public static function listarReservas(){
            $db = new Conexion();
            $query = "SELECT reservas.id_reserva, clientes.nombre, salones.nombre_salon, reservas.mes, reservas.anio, reservas.detalles FROM reservas
                        INNER JOIN clientes ON reservas.id_cliente=clientes.id_cliente
                        INNER JOIN salones ON reservas.id_salon=salones.id_salon;";
            $resultado = $db->query($query);
            $datos = [];

            if($resultado->num_rows){
                while($row = $resultado -> fetch_assoc()){
                    $datos[] = [
                        'id_reserva'=>$row['id_reserva'],
                        'cliente'=>$row['nombre'],
                        'salon'=>$row['nombre_salon'],
                        'mes'=>$row['mes'],
                        'año'=>$row['anio'],
                        'detalles'=>$row['detalles']
                    ];
                }
                return $datos;
            }
            return $datos;
        }

        public static function consultarReservaporId($id_reserva){
            $db = new Conexion();
            $query = "SELECT reservas.id_reserva, clientes.nombre, salones.nombre_salon, reservas.mes, reservas.anio, reservas.detalles FROM reservas 
                        INNER JOIN clientes ON reservas.id_cliente=clientes.id_cliente
                        INNER JOIN salones ON reservas.id_salon=salones.id_salon
                        WHERE id_reserva=$id_reserva";
            $resultado = $db->query($query);
            $datos = [];

            if($resultado->num_rows){
                while($row = $resultado -> fetch_assoc()){
                    $datos[] = [
                        'id_reserva'=>$row['id_reserva'],
                        'cliente'=>$row['nombre'],
                        'salon'=>$row['nombre_salon'],
                        'mes'=>$row['mes'],
                        'año'=>$row['anio'],
                        'detalles'=>$row['detalles']
                    ];
                }
                return $datos;
            }
            return $datos;
        }

        public static function insertarReserva($id_cliente, $id_salon, $mes, $anio, $detalles){
            $db = new Conexion();
            $query = "INSERT INTO reservas (id_cliente, id_salon, mes, anio, detalles)
                VALUES (".$id_cliente.", ".$id_salon.", '".$mes."', ".$anio.", '".$detalles."')";
            $db->query($query);
            
            if ($db->affected_rows) {
                return TRUE;
            }
            return FALSE;
        }

        public static function modificarReserva($id_reserva, $id_cliente, $id_salon, $mes, $anio, $detalles){
            $db = new Conexion();
            $query = "UPDATE reservas SET
                id_cliente=".$id_cliente.", id_salon=".$id_salon.", mes='".$mes."', anio=".$anio.", detalles='".$detalles."'
                WHERE id_reserva=$id_reserva";
            $db->query($query);
            
            if ($db->affected_rows) {
                return TRUE;
            }
            return FALSE;
        }

        public static function borrarReserva($id_reserva){
            $db = new Conexion();
            $query = "DELETE * FROM reservas WHERE id_reserva=$id_reserva";
            $db->query($query);
            if ($db->affected_rows) {
                return TRUE;
            }
            return FALSE;
        }
    }

?>