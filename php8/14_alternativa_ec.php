<?php

    $edad = 18;
    if($edad >= 18):
        echo "Es mayor de edad";
    else:
        echo "Es menor de edad";
    endif;

    echo "<br>";
    echo "<br>";
    
    $i = 1;
    while($i <= 10):
        echo "$i <br>";
        $i++;
    endwhile;

    echo "<br>";
    echo "<br>";

    for ($i=1; $i <= 10 ; $i++):  
        echo "$i <br>";
    endfor;    

?>