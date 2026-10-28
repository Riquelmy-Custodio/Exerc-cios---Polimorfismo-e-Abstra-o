<?php

class Frete{
    
    public function CalcularFrete($peso){
        echo  'Calculando Frete...';
    }
}

class FreteNormal extends Frete{
    public function CalcularFrete($peso){
    echo 
    'Modo: Frete Normal<br>' . 
    'Peso: '. $peso .'Kg<bg>' . 
    '<br>Frete: ' . ($peso * 2) + 10 . 'R$<br>';
    }
}

class FreteExpresso extends Frete{
    public function CalcularFrete($peso){
     echo 
    'Modo: Frete Expresso<br>' .  
    'Peso: '. $peso .'Kg<bg>' . 
    '<br>Frete: ' . ($peso * 5) + 20 . 'R$<br>';
    }
}

class Retirada_na_loja extends Frete{
    public function CalcularFrete($peso){
     echo 
    'Modo: Retirada na loja<br>' .  
    'Peso: '. $peso .'Kg<bg>' . 
    '<br>Frete: Gratuiro';
    }
}

$compra1 = new FreteNormal();
$compra1->CalcularFrete(60);
echo '<br>';
$compra2 = new FreteExpresso();
$compra2->CalcularFrete(30);
echo '<br>';    
$compra3 = new Retirada_na_loja();
$compra3->CalcularFrete(20);


?>