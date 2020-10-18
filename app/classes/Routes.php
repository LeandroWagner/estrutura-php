<?php

namespace app\classes;

Class Routes{
    public static function load($routes,$uri) {


        //verificada se existe essa rota digitada.
        if(!array_key_exists($uri,$routes)) {
            throw new \Exception('Rota não existe'. $uri);

        }

        return "../app{$routes[$uri]}.php";


    }

}
?>