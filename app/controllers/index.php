<?php
use app\models\User;

$user = new User;

$users = $user->all();

//$name = "Teste";  // Passando parametros para a view.
//$users = $user->find('id',['id' =>'2']);
//dd($users);
//

$layout->add('home');


//require "../app/views/index.php";
?>
