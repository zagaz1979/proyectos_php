<?php

    session_name("LOGIN");
    session_start();

    session_destroy();
    
    if (headers_sent()) {
        echo "<script> window.location.href='052_index.php'; </script>";
    } else {
        header("Location: 052_index.php");
    }

?>