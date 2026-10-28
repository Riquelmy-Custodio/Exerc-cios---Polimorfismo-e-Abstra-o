<?php

abstract class Eletrodomestico {
    protected string $marca;

    public function __construct(string $marca) {
        $this->marca = $marca;
    }

    abstract public function ligar();
}

class televisao extends Eletrodomestico{
    public function __construct(string $marca) {
        parent::__construct($marca);
    }

    public function ligar(){
        echo 'Televisão: Ligada';
    }
}

class geladeira extends Eletrodomestico{
    public function __construct(string $marca) {
        parent::__construct($marca);
    }

    public function ligar(){
        echo 'Geladeira: Refrigeração Ativa';
    }
}

$televisão = new televisao('Sansung');
$televisão->ligar();

echo'<br>';

$geladeira = new geladeira('Brastemp');
$geladeira->ligar();

?>