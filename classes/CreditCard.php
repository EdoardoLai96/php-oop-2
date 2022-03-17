<?php

class CreditCard{

    protected $expiryMonth;
    protected $expiryYear;
    protected $cvv;
    protected $number;
    public $owner;


    public function __construct($expiryMonth,$expiryYear,$cvv){
        $this->setExpiryMonth($expiryMonth);
        $this->setExpiryYear($expiryYear);
        $this->setCvv($cvv);
    }

    public function getExpiryMonth(){
        return $this->expiryMonth;
    }


    public function setExpiryMonth($expiryMonth){
        if(is_numeric($expiryMonth) && $expiryMonth > 0 && $expiryMonth <= 12){
            $this->expiryMonth = $expiryMonth;
        }else{
            throw new Exception("Mese inserito non valido");
        }
    }

    public function getExpiryYear(){
        return $this->expiryYear;
    }


    public function setExpiryYear($expiryYear){
        if(is_numeric($expiryYear) && $expiryYear > 0){
            $this->expiryYear = $expiryYear;
        }else{
            throw new Exception("Anno inserito non valido");
        }
    }

    public function getCvv(){
        return $this->cvv;
    }
    
    
    public function setCvv($cvv){
        if(is_numeric($cvv) && $cvv > 0 && strlen($cvv) == 3){
            $this->cvv = $cvv;
        }else{
            throw new Exception("Cvv inserito non valido");
        }
    }






    public function isExpired(){
        $expired = DateTime::createFromFormat('m-y', $this->expiryMonth.'-'.$this->expiryYear);
        $now = new DateTime();
        if($expired < $now){
            throw new Exception("Expired card");
        }
    
    }


}
