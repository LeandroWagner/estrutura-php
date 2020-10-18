<?php

namespace app\traits;

use app\models\querybuilder\Insert;
use app\models\querybuilder\Update;

trait PersistDb {

    public function insert($attributes) {
        
        $attributes = (array) $attributes;
       
        $sql = insert::sql($this->table,$attributes);

        $insert = $this->connection->prepare($sql);

        return $insert->execute($attributes);

        /*OLD
        $sql = "insert into {$this->table}(";

        $sql .= implode(',',array_keys($attributes)).') values(';

        $sql .= ':' .implode(',:',array_keys($attributes)).')';

        return $sql;    

        dd($attributes);
        dd($sql);
        */

    }
   // /*
    public function update($attributes, $where) {
        
        $attributes = (array) $attributes;
    
        $sql = (new Update)->where($where)->sql($this->table, $attributes); 
        
        $update = $this->connection->prepare($sql);

        $update->execute($attributes);

        return $update->rowCount(); 
    }
   // */

}

?>