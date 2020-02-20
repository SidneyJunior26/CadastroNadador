<?php

function defineCategoriaCompetidor(string $nome, string $idade) : ?string
{
    $categorias = [];
    $categorias[] = 'Infantil';
    $categorias[] = 'Adolescente';
    $categorias[] = 'Adulto';

    if (ValidaNome($nome) && ValidaIdade($idade)) {
        removerMensagemErro();
        if ($idade >= 6 && $idade <= 12) {
            for ($i = 0; $i < count($categorias); $i++) {
                if ($categorias[$i] == "Infantil") {
                    SetarMensagemSucesso("O nadador " . $nome . " compete na categoria " . $categorias[$i]);
                    return null;
                }
            }
        } else if ($idade >= 13 && $idade <= 18) {
            for ($i = 0; $i < count($categorias); $i++) {
                if ($categorias[$i] == "Adolescente") {
                    SetarMensagemSucesso("O nadador " . $nome . " compete na categoria " . $categorias[$i]);
                    return null;
                }
            }
        } else if ($idade > 18) {
            for ($i = 0; $i < count($categorias); $i++) {
                if ($categorias[$i] == "Adulto") {
                    SetarMensagemSucesso("O nadador " . $nome . " compete na categoria " . $categorias[$i]);
                    return null;
                }
            }
        } else {
            SetarMensagemErro("O nadador " . $nome . " não pode competir em nenhuma categoria ");
            return null;
        }
    } else {
        removerMensagemSucesso();
        return obterMensagemErro();
    }
}
