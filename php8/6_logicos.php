<?php

# Cuando es falso no se imprime nada

/*
    print(true && true);
    echo "<br>";
    var_dump(true && true);
    echo "<br>";
    echo true && false;
    echo "<br>";
*/

    // and --> &&

    var_dump(true && true); // true
    echo "<br>";

    var_dump(true && false); // false
    echo "<br>";

    var_dump(false && true); // false
    echo "<br>";

    var_dump(false && false); // false
    echo "<br>";
    echo "<br>";

    // or --> ||

    var_dump(true || true); // true
    echo "<br>";

    var_dump(true || false); // true
    echo "<br>";

    var_dump(false || true); // true
    echo "<br>";

    var_dump(false || false); // false
    echo "<br>";
    echo "<br>";

    // xor

    var_dump(true xor true); // false
    echo "<br>";

    var_dump(true xor false); // true
    echo "<br>";

    var_dump(false xor true); // true
    echo "<br>";

    var_dump(false xor false); // false
    echo "<br>";
    echo "<br>";


    // not --> !

    var_dump(!false); // true
    echo "<br>";

?>