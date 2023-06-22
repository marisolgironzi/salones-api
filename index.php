<?php

    require_once "usuarios.php";
    require_once "clientes.php";
    require_once "reservas.php";
    require_once "salones.php";

    switch ($_SERVER['REQUEST_METHOD']) {

        //Tabla usuarios
        case 'listarUsuarios':
            echo json_encode(Usuarios::listarUsuarios());
            break;
        case 'consultarUsuarioporId';
            echo json_encode(Usuarios::consultarUsuarioporId());
            break;
        case 'insertarUsuario':
            echo json_decode(Usuarios::insertarUsuario());
            break;
        case 'borrarUsuario':
            echo json_decode(Usuarios::borrarUsuario());
            break;
        case 'modificarUsuario':
            echo json_decode(Usuarios::modificarUsuario());
            break;

        //Tabla clientes
        case 'listarClientes':
            echo json_encode(Clientes::listarClientes());
            break;
        case 'consultarClienteporId';
            echo json_encode(Usuarios::consultarClienteporId());
            break;
        case 'insertarCliente':
            echo json_decode(Clientes::insertarCliente());
            break;
        case 'borrarCliente':
            echo json_decode(Clientes::borrarCliente());
            break;
        case 'modificarCliente':
            echo json_decode(Clientes::modificarCliente());
            break;

        //Tabla reservas
        case 'listarReservas':
            echo json_encode(Reservas::listarReservas());
            break;
        case 'consultarReservaporId';
            echo json_encode(Usuarios::consultarReservaporId());
            break;
        case 'insertarReserva':
            echo json_decode(Reservas::insertarReserva());
            break;
        case 'borrarReserva':
            echo json_decode(Reservas::borrarReserva());
            break;
        case 'modificarReserva':
            echo json_decode(Reservas::modificarReserva());
            break;

        //Tabla salones
        case 'listarSalones':
            echo json_encode(Salones::listarSalones());
            break;
        case 'consultarSalonporId';
            echo json_encode(Salones::consultarSalonporId());
            break;
        case 'insertarSalon':
            echo json_decode(Salones::insertarSalon());
            break;
        case 'borrarSalon':
            echo json_decode(Salones::borrarSalon());
            break;
        case 'modificarSalon':
            echo json_decode(Salones::modificarSalon());
            break;

        default:
            echo 'Error al mostrar los datos';
            break;

    }

?>