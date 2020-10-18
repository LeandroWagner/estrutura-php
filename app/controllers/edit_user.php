<?php

use app\models\User;
use app\classes\Layout;


$id = filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT); //Nesse filtro quero pegar o get com numero inteiro.

$user = new User;

$userEncontrado = $user->find('id',$id);

$layout->add('edit_user'); //carrega a view.


//dd($userEncontrado);



?>