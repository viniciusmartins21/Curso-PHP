<?php

require_once 'funcoes.php';

$contasCorrentes = [
    '123.456.509-01' => [
        'titular' => 'Vinicius',
        'saldo' => '2000'
    ], 
    '120.193.567-10' => [
        'titular' => 'Tayna',
        'saldo' => '1000'
    ], 
    '123.459.659-06' => [
        'titular' => 'Lucca',
        'saldo' => '3000'
    ]
];

// $contas_correntes['123-576-879-10'] = [
//     'titular' => 'Claudia',
//     'saldo' => '400'
// ];


$contasCorrentes['123.459.659-06'] = depositar(
    $contasCorrentes['123.459.659-06'], 
    4000);

    titularComLetrasMaiusculas($contasCorrentes['123.456.509-01']);
    unset($contasCorrentes['123.456.509-01']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas correntes</h1>

    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?= $cpf; ?> </h3> 
        </dt>
        <dd>
            Saldo: <?= $conta['saldo']; ?>
        </dd>
        <?php } ?>
    </dl>
</body>
</html>



