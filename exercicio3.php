<?php

class Notificacao{
    
    public function Enviar($mensagem){
        echo '<br>Enviando Notificação<br>';
    }
}

class NotEmail extends Notificacao{
    public function Enviar($mensagem){
        echo '<br>Canal: Email <br> 
              Mensagem: ' . $mensagem . '<br>';
    }
}

class NotSMS extends Notificacao{
    public function Enviar($mensagem){
        echo '<br>Canal: SMS <br> 
              Mensagem: ' . $mensagem . '<br>';
    }
}

class NotPush extends Notificacao{
    public function Enviar($mensagem){
        echo '<br>Canal: Push <br> 
              Mensagem: ' . $mensagem . '<br>';
    }
}

$notificacao1 = new NotEmail();
$notificacao1->Enviar("Sexta feira, play tv");
echo '<br>';
$notificacao2 = new NotSMS();
$notificacao2->Enviar("Nois ta como, no recolhe");
echo '<br>';    
$notificacao3 = new NotPush();
$notificacao3->Enviar("Ta frio, naão tá? nois tá como Xãobão, ai krl pega ");


?>