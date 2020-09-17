<?php

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome)){ //verifica se a variável está vazia
    echo 'O nome não pode ser vazio';
    return;
}

if(strlen($nome)){
    echo 'Insira o nome completo';
    return;
}

if($idade >= 6 && $idade <= 12){
    echo $nome. " compete na categoria infantil";
}
else if($idade >= 13 && $idade < 18){
    echo $nome. " compete na categoria adolescente";
}
else if($idade >= 18){
    echo $nome. " compete na categoria adulto";
}



?>