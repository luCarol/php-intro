<?php

$categorias = array("infantil", "adolescente", "adulto");

// print_r($categorias);

$nome = 'Eduardo';
$idade = 19;

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