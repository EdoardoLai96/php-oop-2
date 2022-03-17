<?php
require_once __DIR__ . '/classes/Cuccia.php';
require_once __DIR__ . '/classes/Cibo.php';
require_once __DIR__ . '/classes/Gioco.php';
require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/CreditCard.php';



// SEZIONE CUCCE 

$cuccia_cani_legno = new Cuccia("Cuccia per cani",20,"Cani","Legno");
$cuccia_cani_plastica = new Cuccia("Cuccia per cani",15,"Cani","Plastica");
$cuccia_gatti_legno = new Cuccia("Cuccia per gatti",20,"Gatti","Legno");
$cuccia_gatti_plastica = new Cuccia("Cuccia per gatti",15,"Gatti","Plastica");


// SEZIONE CIBO 

$cibo_cani = new Cibo ("Cibo per Cani",15,"Cani");
$cibo_gatti = new Cibo ("Cibo per Gatti",10,"Gatti");
$cibo_pesci = new Cibo ("Cibo per Pesci",2.5,"Pesci");
$cibo_uccelli = new Cibo ("Cibo per Uccelli",6,"Uccelli");

//SEZIONE GIOCHI

$osso_finto = new Gioco ("Osso Finto", 6, "Cani");
$pallina = new Gioco ("Pallina", 5, "Cani e Gatti");
$tiragraffi = new Gioco("Tira graffi",20,"Gatti");


//SEZIONE UTENTI

$user_01 = new User ("Mario","Rossi","mario.rossi@gmail.com");
$user_02 = new User ("Luca","Bianchi","luca.bianchi@gmail.com");
$user_03 = new User ("Carlo","Verdi","carlo.verdi@gmail.com");


$card_01 = new CreditCard(4,22,323);

  
  try{
      echo $card_01->isExpired();
  }catch(Exception $e){
    echo "Error! " .  $e->getMessage();
  }
 ?>
