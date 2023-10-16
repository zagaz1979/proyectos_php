<?php

    $diaSemana = $_POST["diaSemana"];

    if ($diaSemana == "null") {
        echo "Seleccione un dia de la semana";
        return false;
    }

    echo "<div class='color'></div>";

    echo "Este codigo no debiera de salir";

?>

<style>
    .color {
        width: 100px;
        height: 100px;
        background-color: <?php echo $diaSemana ?>;
    }
</style>