<?php

//Model  basic for all class . Models
namespace app\models;

use app\models\Connection;
use app\traits\PersistDb;
use app\classes\Bind;

abstract class Model {

    use PersistDb;

    protected $connection;

    public function __construct() {

        $this->connection = Bind::get('connection');
    
    }

    public function all() {
        $sql  = "select * from  {$this->table}" ;
        $list = $this->connection->prepare($sql);       //Prepare é mais seguro do que query e previne contra sqlinject - Usa query quando não precisa tratar alguma coisa 
        $list->execute();                              
        return $list->fetchall();                      //Retorna todos os registros


    }
    public function find($field, $value) {
        $sql  = "select * from  {$this->table} where {$field} = :{$field}" ;
        $list = $this->connection->prepare($sql);       
        $list->bindValue($field, $value);
        $list->execute();
       /*
       $list->execute([                                 //Execute com paramentros.
            "id" => 1
            ]
       );
       */
      
       return $list->fetch();                          //Retorna apenas um registro.


    }

    public function delete($field,$value) {
     
        $sql = "delete from {$this->table} where {$field->id} = :id";             //Cria a query
        $delete = $this->connection->prepare($sql);                         //Prepara a query
        $delete->bindValue("id", $value);                                   //Substitui os valores para os recebidos
        $delete->execute();                                                 //Executa a query

        return   $delete->rowCount();



    }

}

?>