<?php
require_once __DIR__ . `/utenteNO.php`;
class utenteSI extends utenteNO{

    public $nome;
    public $cognome;
    public $indirizzoDiCasa = ``;
    public $Email;
    public $password;
    public $CartaDiCredito;

    public $shopping = [];

    public function checkOut(){
        $TotalShoppingPrice = parent::checkOut();

        return[
            "totale" => $prezzoTotale[`totale`] * 0.8;
        ]
    }
}

?>