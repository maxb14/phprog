<?php

require("fonctions1.inc");

$start = 0;

while (true) {
	if ($start == 0) {
		echo "Entrez votre prénom: ";
		$nom = lire();
		echo "\nBievenue ".$nom." !!\n\n";
		$nombre = choix();
		echo $nombre."\n";
		$nbTour = 0;
		$start = 1;
	}
	echo "\nVeuillez entrer un nombre: ";
	$nb = lire();
	$nbTour++;
	if ($nbTour == 10) {
			echo "Vous avez perdu, trop d'essais !!!\n";
			break;
	}
	if ($nb < $nombre) {
			echo "Plus\n";
	}
	elseif ($nb > $nombre) {
			echo "Moins\n";
	}
	else {
			if ($nbTour < 8) {
				echo "gagné en ".$nbTour." tours ! Félicitation ".$nom." !!\n";
			}
			else {
				echo "gagné en ".$nbTour." tours ! Bravo ".$nom." !!\n";
			}
			echo "Voulez vous recommencer ? (0/1) ";
			$alors = lire();
			if ($alors == 0) {
				break;
			}
			else {
				$start = 0;
				continue;
			}
	}
}

?>
