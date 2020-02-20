<?php

function ValidaNome(string $nome): bool
{
    if (empty($nome)) {
        SetarMensagemErro('O nome não pode estar vazio. Por favor, preencha-o novamente.');
        return false;
    } else if (strlen($nome) < 3) {
        SetarMensagemErro('O nome deve conter mais de 3 caracteres!');
        return false;
    } else if (strlen($nome) > 20) {
        SetarMensagemErro('O nome é muito extenso!');
        return false;
    }
    return true;
}

function ValidaIdade(string $idade): bool
{
    if (empty($idade)) {
        SetarMensagemErro('A idade não pode estar vazia!');
        return false;
    } else if (!is_numeric($idade)) {
        SetarMensagemErro('Informe um número para idade!');
        return false;
    }
    return true;
}
