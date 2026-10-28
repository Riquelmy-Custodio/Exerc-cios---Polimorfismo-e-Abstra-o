<?php

    abstract class Funcionario{
        protected string $nome;

        public function __construct($nome){
            $this->nome = $nome;
        }

        public function getNome(){
            return $this->nome;
        }   

        abstract public function calcularSalario();
    }


    class FuncionarioFixo extends Funcionario{
        public  float $salario;

        public function __construct($nome, $salario){
            parent::__construct($nome);
            $this->salario = $salario;
        }

        public function calcularSalario(){
            echo '<br>Salário: R$' . $this->salario .'<br>';
        }
    }

    class FuncionarioComissionado extends Funcionario{
        public  float $salario;
        public int $vendas;

        public function __construct($nome, $salario, $vendas){
            parent::__construct($nome);
            $this->salario = $salario;
            $this->vendas = $vendas;
        }
        public function calcularSalario(){
            echo 'Salário: R$'. $this->salario .'<br>';
            echo 'Comissão: R$' . $this->vendas*0.10 .'<br>';
            echo 'Total: R$'. number_format(($this->salario + ($this->vendas*0.10)), 2) . '<br>';
        }
    }

    $funcionario = new FuncionarioFixo('Riquelmy', 1000);
    $funcionario->calcularSalario();

    echo'<br><br>';

    $funcionarioC = new FuncionarioComissionado('Riquelmy02' , 10000, 5000);
    $funcionarioC->calcularSalario();

?>