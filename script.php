<?php
/**
 * Created by Luana Caroliny Pedroso de Oliveira
 * User: LuCarol
 */

session_start();

$categorias = array("infantil", "adolescente", "adulto");

// print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome)) {
    $_SESSION['mensagem de erro'] = "[ERRO] O nome não pode ser vazio";
    header('Location:index.php');
    return;
}

else if(strlen($nome) < 3) {
    $_SESSION['mensagem de erro'] = "[ERRO] O nome deve conter mais de 3 caracteres";
    header('Location:index.php');
    return;
}

else if(strlen($nome) > 40) {
    $_SESSION['mensagem de erro'] = "[ERRO] O nome é muito extenso";
    header('Location:index.php');
    return;
}

else if(!is_numeric($idade)) {
    $_SESSION['mensagem de erro'] = "[ERRO] A idade deve ser um número";
    header('Location:index.php');
    return;
}

// var_dump($nome);
// var_dump($idade);

if($idade >= 6 && $idade <= 12) {
    for($i = 0; $i < sizeof($categorias); $i++) {
        if($categorias[$i] == 'infantil') {
            $_SESSION['mensagem de sucesso'] = "O nadador ".$nome." compete na categoria infantil";
            header('Location:index.php');
        }
    }
}
elseif($idade >= 13 && $idade <= 18) {
    for($i = 0; $i < sizeof($categorias); $i++) {
        if($categorias[$i] == 'adolescente') {
            $_SESSION['mensagem de sucesso'] = "O nadador ".$nome." compete na categoria adolescente";
            header('Location:index.php');
        }
    }
}
else {
    for($i = 0; $i < sizeof($categorias); $i++) {
        if($categorias[$i] == 'adulto') {
            $_SESSION['mensagem de sucesso'] = "O nadador ".$nome." compete na categoria adulto";
            header('Location:index.php');
        }
    }
}