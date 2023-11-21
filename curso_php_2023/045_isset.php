<?php

    //is_null()
    //isset()
    //empty()

/* 
    // is_null()
    //$numero = NULL;
    $numero = "9";
    
    unset($numero);

    if (is_null($numero)) {
        echo "Es nula";
    } else {
        echo "No es nula";
    }
*/


/* 
    // empty(): si una varabe está vacía 
    $numero = $_GET['numero'];
        
    if (empty($numero)) {
        echo "Esta vacia";
    } else {
        echo "No esta vacia";
    }
*/

/* 
    // isset(): si una variable esta definida y no esta nula

    //$numero = $_GET['numero'];
    //$numero = 7;
    
    $numero = 7;
    unset($numero);
    
    if (isset($numero)) {
        echo "Esta definida";
    } else {
        echo "No esta definida";
    }
*/

    // Ejemplo con isset()

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="045_enviar_form.php" method="POST">
        <input type="text" name="numero" id="numero">
        <button type="submit">Enviar</button>
    </form>

    <?php

        if ( isset($_POST['numero']) && $_POST['numero'] != "" ) {
            include("045_enviar_form.php");
        } else {
            echo "No esta definida";
        }

    ?>

</body>
</html>