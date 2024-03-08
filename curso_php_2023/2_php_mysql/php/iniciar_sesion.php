<?php

    $usuario = limpiar_cadena($_POST['login_usuario']);
    $clave = limpiar_cadena($_POST['login_clave']);

     # Verificando campos obligatorios
     if ($usuario == "" || $clave == "") {
        echo '
        <div class="notification is-danger is-light">
            <strong>Ocurrio un error inesperado</strong> 
            <br>
            No has llenado todos los campos que son obligatorios
        </div>
        ';
        exit();
    }

    # Verificando integridad de los datos
    if (verificar_datos("[a-zA-Z0-9]{4,20}", $usuario)) {
        echo '
        <div class="notification is-danger is-light">
            <strong>Ocurrio un error inesperado</strong> 
            <br>
            El Usuario no coincide con el formato solicitado
        </div>
        ';
        exit();
    }

    if (verificar_datos("[a-zA-Z0-9$@.-]{7,100}", $clave)) {
        echo '
        <div class="notification is-danger is-light">
            <strong>Ocurrio un error inesperado</strong> 
            <br>
            la Clave no coincide con el formato solicitado
        </div>
        ';
        exit();
    }    

    $check_user = conexion();
    $check_user = $check_user->query("SELECT * FROM usuarios WHERE u_usuario = '$usuario'");

    if ($check_user->rowCount() == 1) {
        $check_user = $check_user->fetch();
        if ($check_user['u_usuario'] == $usuario && password_verify($clave, $check_user['u_clave'])) {
            $_SESSION['id'] = $check_user['u_id'];
            $_SESSION['nombre'] = $check_user['u_nombre'];
            $_SESSION['apellido'] = $check_user['u_apellido'];
            $_SESSION['usuario'] = $check_user['u_usuario'];

            if (headers_sent()) {
                echo "<script> window.location.href='index.php?vista=home'; </script>";
            } else {
                header("Location: index.php?vista=home");
            }
        } else {
            echo '
            <div class="notification is-danger is-light">
                <strong>Ocurrio un error inesperado</strong> 
                <br>
                Usuario o clave incorrectos
            </div>
            ';    
        }
    } else {
        echo '
        <div class="notification is-danger is-light">
            <strong>Ocurrio un error inesperado</strong> 
            <br>
            Usuario o clave incorrectos
        </div>
        ';
    }
    $check_user = null;