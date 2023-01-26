<?php

require "ressources.php";

$developpeur = array(new Developpeur(550,"Le Flock", "Louis-Marie", "lmleflock@test.net","0606060606",2500, "Java"), 
new Developpeur(650,"Poirie", "Ethan", "ach@test.net", "0707070707",2750, "C++")) ;
 
$manager = array() ;


foreach ($developpeur as $value) {
	echo $value->afficher();
}

echo "<br/><br/><br/>";
foreach ($manager as $value) {
	echo $value->afficher();
}