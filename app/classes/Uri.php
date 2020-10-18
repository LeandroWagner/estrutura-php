<?php

namespace app\classes;

Class Uri{

    public static function load(){
       return parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);              //Para pegar somente o caminho. 

    }

}
?>