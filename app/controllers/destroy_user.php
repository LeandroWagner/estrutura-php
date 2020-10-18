<?php

use app\classes\Validation;
use app\models\Transaction;
use app\models\Post;
use app\models\USer;


$id = filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT); //Nesse filtro quero pegar o get com numero inteiro.


//trabalhar com a mesma conexao transaction.
$validation = new Validation;

$validate = $validation->validate($_GET);

//Metodos mágicos.
$transaction = new Transaction;

//callback - função anonima //faz todas as querys dentro passa um funcao para outra funcao.
$transaction->transactions(function() use($transaction, $validate){
    
    $transaction->model(User::class)->delete($validate,$_GET['id']);
  

    /*
    $transaction->model(Post::class)->insert([
        'title' => 'teste',
        'user'   => 78,
        'description' => 'description teste',

    ]);
    */
    if ($transaction){
        header('location:/pdo') ;       //Redireciona para pagina inicial.
    }
    //*/
   
});


?>