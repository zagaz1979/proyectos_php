<?php

    $asignaturas = $_POST['asignatura'];
    $frutas = $_POST['frutas'];

    //echo json_encode($asignatura);
    //var_dump($asignatura);
    //echo "<br>";
    //echo $frutas . "<br>";

    foreach ($asignaturas as $key => $asignatura) {
        echo $asignatura . "<br>";
    }

    echo "<br>";
    echo "<br>";
    echo "<br>";

    foreach ($frutas as $fruta) {
        echo $fruta . "<br>";
    }

?>