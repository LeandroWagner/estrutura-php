<?php

namespace app\models;

Class User extends Model {

    protected $table  = 'users';
    /*

    public function insert(array $attributes) {

        $sql = "insert into {$this->table} (name,email,password) values (:name,:email,:password)";

        $insert = $this->connection->prepare($sql);
    */    
        /*
        //Como 2 opcao
        foreach($attributes as $key => $value){
            $insert->bindValue($key,$value);
        }
        */
        
        /*
        //Com bindValue 1 opção
        $insert->bindValue('name',$attributes['name']);
        $insert->bindValue('email',$attributes['email']);
        $insert->bindValue('password',$attributes['password']);
        */
        /*
        //Para usar na 1 e 2 opcao    
        //return $insert->execute();
        //return $insert->execute($attributes);


    }
   */
   /*
   public function update(array $attributes) {

    $sql = "update {$this->table} set name = :name, email =:email, password = :password where id = :id";

    $update = $this->connection->prepare($sql); //prepare porque estour utilizando placeholder.
    $update->execute($attributes);

    return $update->rowCount(); //pega o numero de retorno de registro


   }
   */
}

?>