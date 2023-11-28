<?php
    
    date_default_timezone_set("America/Bogota");

    function fecha_espanol_larga() {
        
        $fecha_dia = date("d");
        $fecha_mes = date("m");
        $fecha_anio = date("Y");

        $dia_semana = [
            'Monday' => 'Lunes',
            'Tuesday' => 'Martes',
            'Wednesday' => 'Miércoles',
            'Thursday' => 'Jueves',
            'Friday' => 'Viernes',
            'Saturday' => 'Sábado',
            'Sunday' => 'Domingo'
        ];

        $meses_del_anio = [
            '01' => 'Enero',
            '02' => 'Febrero',
            '03' => 'Marzo',
            '04' => 'Abril',
            '05' => 'Mayo',
            '06' => 'Junio',
            '07' => 'Julio',
            '08' => 'Agosto',
            '09' => 'Septiembre',
            '10' => 'Octubre',
            '11' => 'Noviembre',
            '12' => 'Diciembre',
        ];

        $fecha_final = $dia_semana[date("l")] . " " . $fecha_dia . " de " . $meses_del_anio[$fecha_mes] . " de " . $fecha_anio;

        return $fecha_final;

    }

    echo "La fecha larga es: " . fecha_espanol_larga();

    echo "<br>";

    function fecha_espanol_corta($fecha = "") {

        if ($fecha == "") {
            $fecha = date("d-m-Y");
        } else {
            $fecha = date("d-m-Y", strtotime($fecha));
        }

        $fecha = explode("-", $fecha);

        $fecha_dia = $fecha[0];
        $fecha_mes = $fecha[1];
        $fecha_anio = $fecha[2];

        $meses_del_anio = [
            '01' => 'Enero',
            '02' => 'Febrero',
            '03' => 'Marzo',
            '04' => 'Abril',
            '05' => 'Mayo',
            '06' => 'Junio',
            '07' => 'Julio',
            '08' => 'Agosto',
            '09' => 'Septiembre',
            '10' => 'Octubre',
            '11' => 'Noviembre',
            '12' => 'Diciembre',
        ];

        $fecha_final = $fecha_dia . " de " . $meses_del_anio[$fecha_mes] . " de " . $fecha_anio;

        return $fecha_final;

    }

    echo "La fecha corta es: " . fecha_espanol_corta() . "<br>";
    echo "La fecha corta es: " . fecha_espanol_corta("01/01/2023") . "<br>";
    echo "La fecha corta es: " . fecha_espanol_corta("02-02-2023") . "<br>";
    echo "La fecha corta es: " . fecha_espanol_corta("2022-09-17") . "<br>";
    echo "La fecha corta es: " . fecha_espanol_corta(date("Y-m-d")) . "<br>";

    $fecha_prueba = date("Y-m-d");
    echo "La fecha corta es: " . fecha_espanol_corta($fecha_prueba) . "<br>";

    $fecha_prueba = "07/07/2021";
    echo "La fecha corta es: " . fecha_espanol_corta($fecha_prueba) . "<br>";

    /*
    function fecha_corta() {

        $fecha_dia = date("d");
        $fecha_mes = date("m");
        $fecha_anio = date("Y");

        $meses_del_anio = [
            '01' => 'Enero',
            '02' => 'Febrero',
            '03' => 'Marzo',
            '04' => 'Abril',
            '05' => 'Mayo',
            '06' => 'Junio',
            '07' => 'Julio',
            '08' => 'Agosto',
            '09' => 'Septiembre',
            '10' => 'Octubre',
            '11' => 'Noviembre',
            '12' => 'Diciembre',
        ];

        $fecha_final = $fecha_dia . " de " . $meses_del_anio[$fecha_mes] . " de " . $fecha_anio;

        return $fecha_final;

    }

    echo "La fecha corta es: " . fecha_corta();
    */


    /*
    function obtenerFechaEnEspanol() {

        $nombre_dias_esp = [
            'Sunday'    => 'Domingo',
            'Monday'    => 'Lunes',
            'Tuesday'   => 'Martes',
            'Wednesday' => 'Miércoles',
            'Thursday'  => 'Jueves',
            'Friday'    => 'Viernes',
            'Saturday'  => 'Sábado',
        ];

        $nombre_meses_esp = [
            'January'   => 'Enero',
            'February'  => 'Febrero',
            'March'     => 'Marzo',
            'April'     => 'Abril',
            'May'       => 'Mayo',
            'June'      => 'Junio',
            'July'      => 'Julio',
            'August'    => 'Agosto',
            'September' => 'Septiembre',
            'October'   => 'Octubre',
            'November'  => 'Noviembre',
            'December'  => 'Diciembre',
        ];

        $fecha_actual = new DateTime();
        $nombre_dia = $nombre_dias_esp[$fecha_actual->format('l')];
        $nombre_mes = $nombre_meses_esp[$fecha_actual->format('F')];

        $fecha_actual_str = $nombre_dia . ', ' . $fecha_actual->format('d') . ' de ' . $nombre_mes . ' de ' . $fecha_actual->format('Y');

        return $fecha_actual_str;
    }

    // Ejemplo de uso
    echo "La fecha actual en español es: " . obtenerFechaEnEspanol();
    */

?>