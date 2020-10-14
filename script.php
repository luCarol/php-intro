<?php
/**
 * Created by Luana Caroliny Pedroso de Oliveira
 * User: LuCarol
 */

$categorias = array("infantil", "adolescente", "adulto");

// print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome)) {
    echo "[ERRO] O nome não pode ser vazio";
    return;
}

if(strlen($nome) < 3) {
    echo "[ERRO] O nome deve conter mais de 3 caracteres";
    return;
}

if(strlen($nome) > 40) {
    echo "[ERRO] O nome é muito extenso";
    return;
}

if(!is_numeric($idade)) {
    echo "[ERRO] A idade deve ser um número";
    return;
}

// var_dump($nome);
// var_dump($idade);

if($idade >= 6 && $idade <= 12) {
    for($i = 0; $i < sizeof($categorias); $i++) {
        if($categorias[$i] == 'infantil') {
            echo "O nadador ".$nome." compete na categoria infantil";
        }
    }
}
elseif($idade >= 13 && $idade <= 18) {
    for($i = 0; $i < sizeof($categorias); $i++) {
        if($categorias[$i] == 'adolescente') {
            echo "O nadador ".$nome." compete na categoria adolescente";
        }
    }
}
else {
    for($i = 0; $i < sizeof($categorias); $i++) {
        if($categorias[$i] == 'adulto') {
            echo "O nadador ".$nome." compete na categoria adulto";
        }
    }
}