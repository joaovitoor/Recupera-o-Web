<?php
    function conectar(){
        $host = "localhost";
        $usuario = "joao";
        $senha = "vitor123";
        $banco = "world";

        $link = mysqli_connect($host, $usuario, $senha);
        if(!$link){
            echo mysqli_error($link);
            die();
        }
        if(!mysqli_select_db($link, $banco)){
            echo mysqli_error($link);
            mysqli_close($link);
            die();
        }
        return $link;
    }