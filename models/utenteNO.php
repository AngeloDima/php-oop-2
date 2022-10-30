<?php


class utenteNO{

    public $nome;
    public $cognome;
    public $indirizzoDiCasa;
    public $email;
    public $cartaDiCredito;




    public function addProduct($prodotti){
        $this->shopping[] = $prodotti;

    }




    public function checkOut(){
        $prezzoTotale = 0;
        

        foreach($this->prodotti as $prodotti){
            $prezzoTotale += $prodotti->prezzo;
        }
        return{
            "totale" => $prezzoTotale;
        }
    }


    public function pagamento(){
        if ($this->cartaDiCredito->isValid()){
            $prezzo = $this->checkOut();
            $this->cartaDiCredito->procediPagamento($prezzoTotale[`prezzo totale`]);
        }
    }


}


?>