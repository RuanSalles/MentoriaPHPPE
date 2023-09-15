<?php

$accounts = [];
function init()
{
    echo "Bem vindo ao assistente de criação de contas" . PHP_EOL;
    sleep(1);
    echo "Escolha uma opção" . PHP_EOL;
    sleep(1);
}

function say($text)
{
    echo $text . PHP_EOL;
}

function createAccount()
{
    say('Digite o nome do titular:');
    $currentAccount['user'] = fgets(STDIN);
    sleep(1);
    say('Digite o número da agência:');
    $currentAccount['agency'] = fgets(STDIN);
    sleep(1);
    say('Digite o número da conta');
    $currentAccount['number'] = fgets(STDIN);
    sleep(1);
    say('Digite o depósito inicial da sua conta');
    $currentAccount['balance'] = intval(fgets(STDIN));
    $GLOBALS['accounts'][] = $currentAccount;
    sleep(2);
}

function showAccounts()
{
    if(count($GLOBALS['accounts'])) {
        var_dump($GLOBALS['accounts']);
    }

    if(!count($GLOBALS['accounts'])) {
        say('Não existem contas cadastradas');
    }

}

function deleteAccount()
{

    say('Digite o nome do usuário que deseja deletar');
    $user = fgets(STDIN);

    $account = array_search($user, $GLOBALS['accounts']);
    unset($GLOBALS['accounts'][$account]);
}

init();
$option = 0;
do {
    say('0. Sair');
    say('1. Cadastrar conta bancária');
    say('2. Mostrar contas bancárias');
    say('3. Deletar conta bancárias');
    $option = intval(fgets(STDIN));
    if ($option === 0) {
        say('Finalizando ações');
        sleep(2);
        say('Programa encerrado com sucesso');
        sleep(1);
    }

    if ($option === 1) {
        createAccount();
        say('Conta criada com sucesso');
        sleep(2);
        say('Para continuar digite mais opções');
    }

    if ($option === 2) {
        showAccounts();
    }

    if ($option === 3) {
        deleteAccount();
        say('Conta deletada com sucesso');
        showAccounts();
    }
} while ($option !== 0);


