<?php


class prodotti {
    public $nome;
    public $prezzo = 0;
    public $marca;
    public $info = "";


    __construct($_nome, $_marca, $_prezzo){
        $this->nome = $_nome;
        $this->marca = $_marca;
        $this->prezzo = $_prezzo;
    }

    
}






?>