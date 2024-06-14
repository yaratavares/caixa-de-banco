<?php

$saldoAtual = 2_000;

while($saldoAtual > 0 && $numero != 4){

    echo('********************' . "\n" .
        'Titular: Yara Tavares' . "\n" .
        'Saldo atual: R$ ' . $saldoAtual . "\n" .
        '*********************' . "\n" .
        '1. Consultar saldo atual' . "\n" .
        '2. Sacar valor' . "\n" .
        '3. Depositar valor' . "\n" .
        '4. Sair' . "\n\n");

    echo "Digite um número: \n";
    $numero = (int) fgets(STDIN);

    switch($numero) {
        case 1:
            echo ("Saldo atual é: $saldoAtual\n\n");
            break;

        case 2:
            echo ("Qual valor deseja sacar?\n");
            $sacar = (int) fgets(STDIN);

        if($saldoAtual - $sacar > 0){
            $saldoAtual -= $sacar;
            echo("Saldo atualizado: $saldoAtual\n\n");
        } else {
            echo("Não é possível sacar esse valor!\n\n");
        }
        break;

        case 3:
            echo ("Qual valor deseja depositar?\n");
            $depositar = (int) fgets(STDIN);
            
            $saldoAtual += $depositar;
            break;
        case 4:
            echo ("Adeus\n");
            break;
        default:
            echo ("Opção inválida");
            break;
    }
}
