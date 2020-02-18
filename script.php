<?php

session_start();

$categorias = [];
$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

// Validação do nome
if (empty($nome)){
    $_SESSION['mensagem-de-erro'] = 'Informe um nome válido';
    header('location: index.php'); 
    return;
}

if (strlen($nome) < 3){
    $_SESSION['mensagem-de-erro'] = 'O nome deve conter mais de 3 caracteres!';
    header('location: index.php');
    return;
}

if (strlen($nome) > 20){
    $_SESSION['mensagem-de-erro'] = 'O nome é muito extenso!';
    header('location: index.php');
    return;
}

// Validações do idade
if (empty($idade)){
    $_SESSION['mensagem-de-erro'] = 'A idade não pode estar vazia!';
    header('location: index.php');
    return;
}

if (!is_numeric($idade)){
    $_SESSION['mensagem-de-erro'] = 'Informe um número para idade!';
    header('location: index.php');
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