<?php
 class User {

    public $credit_card_state;
    public $discount;
    public $registered = false;

    public function __construct($_credit_card_state, $_registered){
        $this->credit_card_state = $_credit_card_state;
        $this->registered = $_registered;
    }

    public function purchase($payment = "failed"){
        if($this->credit_card_state == "valid" && $this->registered == true){
            $this->discount = 20;
            $payment == "success";
            return "Ordine eseguito con successo, sconto applicato";
        }else if($this->credit_card_state == "valid" && $this->registered == false){
            $this->discount = 0;
            $payment == "success";
            return "Ordine eseguito con successo";
        }else if($this->credit_card_state == "expired"){
            $payment == "failed";
            return "Impossibile eseguire l'ordine, verifca metodo di pagamento";
        }
    }
 }