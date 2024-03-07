<?php

    // Conexion a la base de datos
    function conexion() {
        $pdo = new PDO('mysql:host=localhost;dbname=inventario', 'root', '');
        return $pdo;
    }

    // Verificar datos
    function verificar_datos($filtro, $cadena) {
        if (preg_match("/^".$filtro."$/", $cadena)) {
            return false;
        } else {
            return true;
        }
    }

    // Limpiar cadenas de texto de inyeccion sql
    function limpiar_cadena($cadena){
		$cadena = trim($cadena);
		$cadena = stripslashes($cadena);
		$cadena = str_ireplace("<script>", "", $cadena);
		$cadena = str_ireplace("</script>", "", $cadena);
		$cadena = str_ireplace("<script src", "", $cadena);
		$cadena = str_ireplace("<script type=", "", $cadena);
		$cadena = str_ireplace("SELECT * FROM", "", $cadena);
		$cadena = str_ireplace("DELETE FROM", "", $cadena);
		$cadena = str_ireplace("INSERT INTO", "", $cadena);
		$cadena = str_ireplace("DROP TABLE", "", $cadena);
		$cadena = str_ireplace("DROP DATABASE", "", $cadena);
		$cadena = str_ireplace("TRUNCATE TABLE", "", $cadena);
		$cadena = str_ireplace("SHOW TABLES;", "", $cadena);
		$cadena = str_ireplace("SHOW DATABASES;", "", $cadena);
		$cadena = str_ireplace("<?php", "", $cadena);
		$cadena = str_ireplace("?>", "", $cadena);
		$cadena = str_ireplace("--", "", $cadena);
		$cadena = str_ireplace("^", "", $cadena);
		$cadena = str_ireplace("<", "", $cadena);
		$cadena = str_ireplace("[", "", $cadena);
		$cadena = str_ireplace("]", "", $cadena);
		$cadena = str_ireplace("==", "", $cadena);
		$cadena = str_ireplace(";", "", $cadena);
		$cadena = str_ireplace("::", "", $cadena);
		$cadena = trim($cadena);
		$cadena = stripslashes($cadena);
		return $cadena;
	}

    # Funcion renombrar fotos
    function renombrar_fotos($nombre) {
        $nombre = str_ireplace(" ", "_", $nombre);
        $nombre = str_ireplace("/", "_", $nombre);
        $nombre = str_ireplace("#", "_", $nombre);
        $nombre = str_ireplace("-", "_", $nombre);
        $nombre = str_ireplace("$", "_", $nombre);
        $nombre = str_ireplace(".", "_", $nombre);
        $nombre = str_ireplace(",", "_", $nombre);
        $nombre = $nombre . "_" . rand(0,100);
        return $nombre;
    }

    //$foto = "Play Station 5";
    //echo renombrar_fotos($foto);

    //$texto = "<script> Hola mundo </script>";
    //echo limpiar_cadena($texto);

    /*
    $nombre = "Carlos";

    if (verificar_datos("[a-zA-Z]{6,10}", $nombre)) {
        echo "Los datos no coinciden";
    }
    */

    //$pdo->query("INSERT INTO categoria(c_nombre, c_ubicacion) VALUES('prueba', 'texto ubicacion')");