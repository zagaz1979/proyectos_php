<?php

    // Array de tipo escalar
    $estudiante1 = array("Carlos", "Pedro", "Juana", "Anibal");
    $estudiante1[3] = "Claudia";
    echo $estudiante1[3];
    echo "<br>";

    $estudiante2 = ["Carlos", "Pedro", "Juana", "Anibal"];
    $estudiante2[3] = "Claudia";
    echo $estudiante2[3];
    echo "<br>";

    // Array de tipo Asociativo
    $tutor = [
        "nombre"=>"Carlos", 
        "apellido"=>"Gonzalez", 
        "edad"=>27
    ];
    
    echo $tutor["nombre"];
    echo "<br>";

    // Array de multiples dimensiones
    $tutor_2 = [
        "nombre"=>"Vanessa", 
        "apellido"=>"Calles", 
        "edad"=>20,
        "cursos"=>["PHP", "Python", "CSS"]
    ];

    echo $tutor_2["cursos"][0];
    echo "<br>";

    $tutor_3 = [
        "nombre"=>"Vanessa", 
        "apellido"=>"Calles", 
        "edad"=>20,
        "cursos"=>["nombre"=>"Vanessa", "apellido"=>"Calles", "edad"=>20]
    ];

    $tutor_3["pais"] = "El salvador";

    echo $tutor_3["cursos"]["nombre"];
    echo "<br>";
    echo $tutor_3["pais"];
    echo "<br>";

    // longitud del array 
    echo count($estudiante1);
    echo "<br>";
    echo count($tutor_3, COUNT_RECURSIVE);

