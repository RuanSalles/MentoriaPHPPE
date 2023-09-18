<?php
declare(strict_types=1);

/**
 *
 */
class ContaBancaria
{
    /**
     * @var string
     */
    private string $titular;
    /**
     * @var string
     */
    private string $agencia;
    /**
     * @var string
     */
    private string $conta;
    /**
     * @var float
     */
    private float $saldo;

    public function __construct(string $titular, string $agencia, string $conta, float $saldo = 0)
    {
        if(mb_strlen($titular, 'UTF-8') > 6) {
            echo "Nome deve ser menor que 6 caracateres" . PHP_EOL;
            exit;
        }

        $this->titular = $titular;
        $this->agencia = $agencia;
        $this->conta = $conta;
        $this->saldo = $saldo;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function depositar($valor)
    {
        if($valor <= 0) {
            echo "Ação inválida" . PHP_EOL;
            exit;
        }

        $this->saldo = $valor;
        echo "Deposito realizado no valor de R$ $valor" . PHP_EOL;
    }

    public function setTitular($nome)
    {
        $this->titular = $nome;
    }

    public function cadastrarTitular()
    {
        echo "Digite o nome do titular" . PHP_EOL;
        $titular = fgets(STDIN);
        if(!is_string($titular)) {
            echo "Valor inválido, o nome deverá ser um texto" . PHP_EOL;
            exit;
        }

        $this->titular = $titular;
    }

    public function dizer($text)
    {
        echo $text . PHP_EOL;
    }
    public function perguntar()
    {
        return fgets(STDIN);
    }

    public function cadastrarConta()
    {

    }

    public function Menu()
    {
        $opcao = 0;

        self::dizer('Digite uma das opções');
        self::dizer('0. Sair');
        self::dizer('1. Cadastrar Conta');

        do {
            self::perguntar();

            if($this->perguntar() === 1) {
                self::cadastrarConta();
            }

            if($this->perguntar() === 0) {
                $this->dizer('Saindo do programa');
                exit;
            }
        }
        while ($opcao !== 0);
    }


}