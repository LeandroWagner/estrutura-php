<?php

namespace app\models;

use Closure; 

class Transaction extends Model {

    public function transactions(Closure $callback) {
        
        $this->connection->beginTransaction();
        
        try {
        
            $callback();

            $this->connection->commit();

        } catch (\Exception $e) {
            $this->connection->rollback();   //se der algum problema volta
       
            dd($e->getMessage());
       
        }
       

    }
    public function model($model){

       return new $model;

    }

    public function __get($name) {

      if(!property_exists($this, $name)) {

        $model = __NAMESPACE__.'\\'.ucfirst($name);
        //dd(new $model());
        return new $model();
       

      }
        
    }


}
?>