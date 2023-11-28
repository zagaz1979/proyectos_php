<?php

    // Array de tipo escalar

    //$estudiantes = array("Carlos", "Jose", "Vanessa", "Katy");
    //$estudiantes[2] = "Claudia";
    //echo $estudiantes[2];

    $estudiantes = ["Carlos", "Jose", "Vanessa", "Katy", 7];
    $estudiantes[2] = "Claudia";
    echo $estudiantes[2];
    echo "<br>";
    
    // Array de tipo asociativos

    $tutor = [
        "nombre" => "Marco", 
        "apellido" => "Rosso", 
        "edad" => 44
    ];

    $tutor["edad"] = 19;
    echo $tutor["edad"];
    echo "<br>";

    // Array multimensionales

    $tutor_2 = [
        "nombre" => "Vanessa", 
        "apellido" => "Calle", 
        "edad" => 20,
        "cursos" => ["PHP", "Python", "CSS"]
    ];
    
    $tutor_2["cursos"][1] = "Javascrippt";
    echo $tutor_2["cursos"][1];
    echo "<br>";

    $tutor_3 = [
        "nombre" => "Vanessa", 
        "apellido" => "Calle", 
        "edad" => 20,
        "cursos" => ["nombre" => "Maria", "apellido" => "Gonzalez", "edad" => 17]
    ];
    
    $tutor_3["pais"] = "Colombia";
    echo $tutor_3["pais"];
    echo "<br>";

    echo count($estudiantes);
    echo "<br>";

    echo count($tutor_3, COUNT_RECURSIVE);
