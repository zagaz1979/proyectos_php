<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "api";

    $conexion = new mysqli($host, $user, $password, $db);

    if ($conexion->connect_error) {
        die("Conexión no establecida" . $conexion->connect_error);
    }

    header("Content-Type: application/json");
    $metodo = $_SERVER["REQUEST_METHOD"];
    //print_r($metodo);

    $path = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '/';
    $buscarId = explode('/', $path);
    $id = ($path !== '/') ? end($buscarId) : null; 

    switch ($metodo) {
        //  SELECT
        case "GET":
            consulta($conexion, $id);
            break;
        
        // INSERT 
        case "POST":
            insertar($conexion);
            break;

        // UPDATE
        case "PUT":
            actualizar($conexion, $id);
            break;

        // DELETE
        case "DELETE":
            borrar($conexion, $id);
            break;
            
        default:
            echo "Metodo no permitido";
            break;
    }

    function consulta($conexion, $id) {
        $sql = ($id === null) ? 
            "select * from usuarios" 
            : 
            "select * from usuarios where id = $id" ;

        $resultado = $conexion->query($sql);

        if ($resultado) {
            $datos = array();
            while ($fila = $resultado->fetch_assoc()) {
                $datos[] = $fila;
            }
            echo json_encode($datos);
        }        
    }

    function insertar($conexion) {
        $dato = json_decode(file_get_contents("php://input"), true);
        $nombre = $dato["nombre"];
        
        //print_r($nombre);

        $sql = "insert into usuarios(nombre) values('$nombre')";
        $resultado = $conexion->query($sql);

        if ($resultado) {
            $dato['id'] = $conexion->insert_id;
            echo json_encode($dato);
        } else {
            echo json_encode(array("error" => "Error al crear el usuario"));
        }
    }

    function borrar($conexion, $id) {
        $sql = "delete from usuarios where id = $id";
        $resultado = $conexion->query($sql);

        if ($resultado) {
            echo json_encode(array("mensaje" => "Usuario eliminado"));
        } else {
            echo json_encode(array("error" => "Error al eliminar el usuario"));
        }
    }

    function actualizar($conexion, $id) {
                
        $dato = json_decode(file_get_contents("php://input"), true);
        $nombre = $dato["nombre"];
        
        //echo "El id a actualizar es: " . $id . " con el dato " . $nombre;

        $sql = "update usuarios set 
                nombre = '$nombre' 
                where id = $id";

        $resultado = $conexion->query($sql);

        if ($resultado) {
            echo json_encode(array("mensaje" => "Usuario actualizado"));
        } else {
            echo json_encode(array("error" => "Error al actualizar el usuario"));
        }

    }

?>