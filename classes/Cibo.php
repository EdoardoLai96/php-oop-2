<?php

require_once __DIR__ . '/Prodotto.php';

class Cibo extends Prodotto{

    public function __construct($_nome,$_prezzo,$_target){

        parent::__construct($_nome,$_prezzo,$_target);

    }

}