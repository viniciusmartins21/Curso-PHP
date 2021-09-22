<?php

function exibeMensagem($mensagem) 
{
    echo $mensagem . '<br>';
}


// Função de saque de dinheiro da conta
function sacar ($conta, $valorSaque) 
{
    if ($valorSaque > $conta['saldo']) {
        exibeMensagem("Você não pode sacar");
    }  else {
            $conta['saldo'] -= $valorSaque;
        }
        return $conta;
}

// Função de depositar dinheiro em uma conta 
function depositar (array $conta, float $valorDeposito): array {
    if ($valorDeposito > 0) {
        $conta['saldo'] += $valorDeposito;
    } else {
        exibeMensagem("Depositos precisam ser positivos");
    }
    return $conta;
}

function titularComLetrasMaiusculas (array &$conta) {
    $conta ['titular'] = 
    strtoupper($conta['titular']);
}


function exibeConta( array $conta) 
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular. Saldo: $saldo </li>";
}
