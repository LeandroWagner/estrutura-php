<?php

use app\models\User;
use app\classes\Layout;
use app\classes\Validation;

$user = new User;
$validation = new Validation;


$validate = $validation->validate($_POST);


//$id = filter_input(INPUT_POST,'id',FILTER_SANITIZE_NUMBER_INT);

$updated = $user->update($validate,['id'=> $validate->id]);

//Se o retorno for igual a 1 é true;
if ($updated){
    header('location:/pdo') ;       //Redireciona para pagina inicial.
} 


?>