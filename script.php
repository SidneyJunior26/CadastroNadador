<?php

/** Criado por Sidney Jr. */
session_start();

include "Serviços/servicoCategoriaCompetidor.php";
include "Serviços/servicoMensagemSessao.php";
include "Serviços/servicoValidacao.php";

$nome = $_POST['nome'];
$idade = $_POST['idade'];

defineCategoriaCompetidor($nome,$idade);

header('location: index.php');