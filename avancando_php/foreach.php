<?php


$contas_correntes = [
    1234565090 => [
        'titular' => 'Vinicius',
        'saldo' => '2000'
    ], 
    1201935670 => [
        'titular' => 'Tayna',
        'saldo' => '1000'
    ], 
    1234596590 => [
        'titular' => 'Lucca',
        'saldo' => '3000'
    ]
    
];

$contas_correntes['123-576-879-10'] = [
    'titular' => 'Claudia',
    'saldo' => '400'
];

foreach ($contas_correntes as $cpf => $conta) {
    echo $cpf . PHP_EOL;
}
