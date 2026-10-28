<?php

abstract class FormaGeometrica{
    abstract public function calcularArea();
}

class retangulo extends FormaGeometrica{

    public float $base;
    public float $altura;

    public function __construct($base, $altura){
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calcularArea(){
        echo '<br>Base: ' . $this->base .'<br>';
        echo 'Altura: '. $this->altura .'<br>';
        echo 'Área: '. $this->base * $this->altura .' cm2<br>';
    }
}

class circulo extends FormaGeometrica{

    public float $raio;

    public function __construct($raio){
        $this->raio = $raio;
    }

    public function calcularArea(){
        echo '<br>Raio: ' . $this->raio .'<br>' .
        'Área do circulo: ' . 3.14 * ($this->raio**2) .' cm2<br>';
    }
}

$retangulo = new retangulo(4, 5);
$retangulo->calcularArea();

echo '<br>';

$circulo = new circulo(5);
$circulo->calcularArea();


?>