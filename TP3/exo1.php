<?php

require("fonctions1.inc");


/* Fonctions utiles */

function classement($tab) {
	if (count($tab) > 0) {
		arsort($tab);
		echo "Voici le classement: \n\n";
		$i = 1;
		foreach ($tab as $cle => $val) {
			echo $i.") ".$cle." | ".$val." points.";
			echo "\n";
			$i++;
		}
	}
	else {
		echo "Le tableau est vide !\n";
	}
}

/* end of functions */


/* start of prog */


while (true) {
	echo "Entrez le nom du fichier a traiter : ";
	$nomfichier = lire();
	if (file_exists($nomfichier)) {
		break;
	}	
	echo "Le fichier est inexistant !\n";
}

$fichier = fopen($nomfichier, "r");
$tab = array();

while (!feof($fichier)) {
	$ligne = fgets($fichier, 1024);
	$decoupe = explode(" ", $ligne);
	if (isset($decoupe[1])) {
		if (!array_key_exists($decoupe[0], $tab)) {
			$tab[$decoupe[0]] = $decoupe[1];	
		}
		else {
			$tab[$decoupe[0]] += $decoupe[1];
		}
	}
}

classement($tab);

fclose($fichier);

/* end of prog */

?>
