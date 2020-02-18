<?php

$categorias = [];
$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

// Validação do nome
if (empty($nome)){
    echo "O nome não pode ser vazio!";
    return;
}

if (strlen($nome) < 3){
    echo "O nome deve conter mais de 3 caracteres! (Máx. 20 caracteres)";
    return;
}

if (strlen($nome) > 20){
    echo "O nome é muito extenso!";
    return;
}

// Validações do idade
if (empty($idade)){
    echo "A idade não pode ser vazia!";
    return;
}

if (!is_numeric($idade)){
    echo "Informe um numero para a idade!";
    return;
}

// Validações da Categoria
if ($idade >= 6 && $idade <= 12){
    for ($i = 0; $i < count($categorias); $i++){
        if ($categorias[$i] == "Infantil"){
            echo "O nadador ".$nome. " compete na categoria ". $categorias[$i];
        }
    }
}
else if ($idade >= 13 && $idade <= 18){
    for ($i = 0; $i < count($categorias); $i++){
        if ($categorias[$i] == "Adolescente"){
            echo "O nadador ".$nome. " compete na categoria ". $categorias[$i];
        }
    }
}
else if ($idade > 18){
    for ($i = 0; $i < count($categorias); $i++){
        if ($categorias[$i] == "Adulto"){
            echo "O nadador ".$nome. " compete na categoria ". $categorias[$i];
        }
    }
}
else {
    echo 'Idade inválida';
}