<?php

function criarConta(string $cpf, String $nomeTitular, float $saldo): array 
{
    return [
        $cpf => [
            'titular' => $nomeTitular,
            'saldo' => $saldo
        ]
    ];
}