<?php
// require_once("./Personne.class.php");
include_once('./Personne.class.php');
$hero = new Personne();

$minion = new Personne();
$lieutenant_minion = new Personne();
$chef_minion = new Personne();



$hero->setName("Hero");
$hero->setNbrVie(200);
$hero->setdegat(15);



$minion->setName("Minion");
$minion->setNbrVie(10);
$minion->setdegat(10);

$lieutenant_minion->setName("lieutenantMinion");
$lieutenant_minion->setNbrVie(30);
$lieutenant_minion->setdegat(30);

$chef_minion->setName("chefMinion");
$chef_minion->setNbrVie(100);
$chef_minion->setdegat(100);


$hero->attaque($minion->getDegat());
echo "nombre de vie $hero->nbr_vie";

$hero->attaque($chef_minion->getDegat());
echo "<br>nombre de vie $hero->nbr_vie</br>";

$hero->attaque($lieutenant_minion->getDegat());
echo "nombre de vie $hero->nbr_vie";

$hero->attaque($chef_minion->getDegat());
echo "<br>nombre de vie $hero->nbr_vie</br>";



$minion->attaque($hero->getNbrVie());
echo "<br>nombre de vie $hero->nbr_vie</br>";
echo "<br>nombre de vie du minion $minion->nbr_vie</br>";

$minion->bonusArmure($hero->getNbrVie());
echo "<br>nombre de vie $hero->nbr_vie</br>";
echo "<br>nombre de vie du minion $minion->nbr_vie</br>";
