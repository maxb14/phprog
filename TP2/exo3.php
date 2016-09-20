<?php

require("fonctions1.inc");

function calcul($tab) {
	$somme = 0;
	for ($i = 0 ; $i < count($tab) ; $i++) {
		$somme += $tab[$i];
	}
	if ($somme == 0) {
		return 0;
	}
	else {
		return $somme/count($tab);
	}
}

function cleval($tab) {
	if (count($tab) > 0) {
		asort($tab);
		foreach ($tab as $cle => $val) {
			echo "clé : ".$cle." | valeur : ".$val."\n";
		}
	}
	else {
		echo "Le tableau est vide !!\n";
	} 	
}

/* question 1 
echo "ligne de nombre: ";
$ligne = lire();
$tab = explode("_", $ligne);
$result = calcul($tab);
echo "La moyenne est ".$result."\n";
*/

while (true) {
	echo "Quel fichier de notes souhaitez-vous lire ? ";
	$nomfichier = lire();
	if (file_exists($nomfichier)) {
		break;
	}
	echo "\nFichier introuvable !\n";
}

$fichier = fopen($nomfichier, "r");
$noms_moyenne = array();

while (!feof($fichier)) {
	$ligne = fgets($fichier, 100);
	$decoupe = explode(":", $ligne);
	if (isset($decoupe[1])) {
		$tab = explode("_", $decoupe[1]); 
		$moyenne = calcul($tab);
		$noms_moyenne[$decoupe[0]] = $moyenne;
		echo $decoupe[0]." : ".$moyenne."\n";
	}
}

cleval($noms_moyenne);
?>
