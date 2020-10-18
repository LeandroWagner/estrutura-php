<?php

//Gera todo o sql
namespace app\models\querybuilder;


Class Insert {

    public static function sql($table,$attributes) {
        
        $sql = "insert into {$table}(";

        $sql .= implode(',',array_keys($attributes)).') values(';

        $sql .= ':' .implode(',:',array_keys($attributes)).')';

        return $sql;    

    }

}

?>