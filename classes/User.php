<?php
 class User {

    public $name;
    public $lastName;
    public $email;
    protected $discount = 0;
    protected $creditCard;


      public function __construct($name, $lastName, $email){
          $this->name = $name;
          $this->lastName = $lastName;
          $this->setEmail($email);
      }


        // INSERISCO VERIFICA PERCHÈ VENGA SCELTA UN'EMAIL VALIDA, TRAMITE UN METODO SET PUBBLICO
        //PER POTER ACCEDERE A UN ATTRIBUTO PROTETTO

      public function setEmail($email){
          if(strpos($email,"@") === false && strpos($email,".") === false){
              throw new Exception("Email inserita non valida");
            }else{
                $this->email = $email;
                return true;
            }
      }



      public function getEmail(){
          return $this->email;
      }


    // METODO PER IMPOSTARE LA CREDIT CARD DELL'UTENTE NELL'INDEX, (CREDIT CARD GESTITA IN ALTRA CLASSE)


      public function setCreditcard($creditCard){
          $this->creditCard = $creditCard;
      }

 }