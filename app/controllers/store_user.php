<?php
use app\classes\Validation;
use app\models\Transaction;
use app\models\Post;
use app\models\USer;

//trabalhar com a mesma conexao transaction.
$validation = new Validation;

$validate = $validation->validate($_POST);

//Metodos mágicos.
$transaction = new Transaction;

//callback - função anonima //faz todas as querys dentro passa um funcao para outra funcao.
$transaction->transactions(function() use($transaction, $validate){
    
    $transaction->model(User::class)->insert($validate);
  
    $transaction->model(Post::class)->insert([
        'title' => 'teste',
        'user'   => 78,
        'description' => 'description teste',

    ]);

    if ($transaction){
        header('location:/pdo') ;       //Redireciona para pagina inicial.
    }
   
});



//Old  estrutura antes session 1/4 
//use app\classes\Validation;
/*
//Trabalha com as validaçoes vindas do formulario !!!  filter_input
$name     = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email    = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
*/


/*

$validation = new Validation;

$validate = $validation->validate($_POST);

$user = new app\models\User;

//Old in array
$cadastrado = $user->insert([
    'name'     => $name,
    'email'    => $email,
    'password' => $password,
    
]);
*/
/*
$cadastrado = $user->insert($validate);


if ($cadastrado){
    header('location:/pdo') ;       //Redireciona para pagina inicial.
} 

*/
?>