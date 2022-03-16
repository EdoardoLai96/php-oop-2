<?php

require_once __DIR__ . '/Prodotto.php';

class Cuccia extends Prodotto{

    public function __construct($_nome,$_prezzo,$_target,$_materiale){

        parent::__construct($_nome,$_prezzo,$_target);

        $this->materiale = $_materiale;
    }

}