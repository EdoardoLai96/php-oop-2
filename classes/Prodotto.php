<?php

require_once __DIR__ . '/Prodotto.php';

class Prodotto {
    public $nome;
    public $prezzo;
    public $target;

    public function __construct($_nome,$_prezzo,$_target)
    {
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->target = $_target;
    }
}
