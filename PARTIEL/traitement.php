<?php

require "ressources.php";

$developpeur = array() ;
 
$manager = array() ;


foreach ($developpeur as $value) {
	echo $value->afficher();
}

echo "<br/><br/><br/>";
foreach ($manager as $value) {
	echo $value->afficher();
}