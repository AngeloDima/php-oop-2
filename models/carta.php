<?php


class carta{
    public $numero;
    public $data;
    public $cvv;
    public $proprietario;

    function __construct($_numero, $_data, $_cvv, $_proprietario){
        $this->numero = $_numero;
        $this->data = $_data;
        $this->cvv = $_cvv;
        $this->proprietario = $_proprietario;
    }

    public function isValid(){
        return true;
    }
}


?>