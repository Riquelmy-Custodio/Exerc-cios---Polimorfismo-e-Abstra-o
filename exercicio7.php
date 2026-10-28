<?php

    abstract class ContaBancaria{
        protected string $titular;
        protected float $saldo;

        public function __construct($titular, $saldo){
            $this->titular = $titular;
            $this->saldo = $saldo;
        }

        public function getSaldo(){
            return $this->saldo;
        }
        public function depositar($valor){
            if ($valor > 0) {
                $this->saldo += $valor;
                echo'<br>Depositado: R$' . $valor;
            } else {
                echo 'Você não pode depositar esse valor'; 
            }
        }

        abstract public function calcularTarifa();  
    }

    class ContaCorrente extends ContaBancaria{
        public function __construct($titular, $saldo){
               parent::__construct($titular, $saldo);
        }

        public function calcularTarifa(){
            echo '<br>Tarifa: R$15,00';
            $this->saldo -= 15;
        }
        public function mostrar(){
            echo '<br>Saldo: R$' . $this->getSaldo(); 
        }


    }

    class ContaPoupanca extends ContaBancaria{
        public function __construct($titular, $saldo){
               parent::__construct($titular, $saldo);
        }
        public function calcularTarifa(){
            echo '<br>Tarifa: R$00,00';
        }

        public function mostrar(){
            echo '<br>Saldo: R$' . $this->saldo; 
        }
    }

    echo'<h3> Conta Corrente</h3>';
    $conta1 = new ContaCorrente('Lucas' , 2000);
    $conta1->calcularTarifa();
    $conta1->mostrar();
    $conta1->depositar(515);
    $conta1->mostrar();
    $conta1->calcularTarifa();
    $conta1->mostrar();
    echo'<br>';
    echo'<h3> Conta Poupança</h3>';
    $conta2 = new ContaPoupanca('Lucas' , 1500);
    $conta2->calcularTarifa();
    $conta2->mostrar();
    $conta2->depositar(500);
    $conta2->mostrar();
    $conta2->calcularTarifa();
    $conta2->mostrar();
?>