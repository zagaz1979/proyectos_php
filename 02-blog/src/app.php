<?php

    if (isset($_GET['post'])){

        $postNeme = $_GET['post'];
        require 'src/post/index.php';

    }else if(isset($_GET['view'])){
        $view = $_GET['view'];

        require 'src/post/' . $view . '.php';
    }else{
        require 'src/home.php';
    }


//Voy por 58:43 minutos