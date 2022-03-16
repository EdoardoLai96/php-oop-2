<?php
include __DIR__ . '/classes/Prodotto.php';
include __DIR__ . '/classes/Cuccia.php';


$cuccia_cani_legno = new Cuccia("Cuccia per cani","20","Cani","Legno");
$cuccia_cani_plastica = new Cuccia("Cuccia per cani","15","Cani","Plastica");
$cuccia_gatti_legno = new Cuccia("Cuccia per gatti","20","Gatti","Legno");
$cuccia_cani_plastica = new Cuccia("Cuccia per gatti","15","Gatti","Plastica");

var_dump($cuccia_cani_legno);

