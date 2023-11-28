<?php

    //if ( isset($_POST['numero']) && $_POST['numero'] != "" ) {

    $numero = $_POST['numero'];
    for ($i = 1; $i <= 12; $i++) {
        echo "$numero X $i = " . $numero * $i . "<br>";
    }

    //} else {
    //    echo "No esta definida";
    //}

?>