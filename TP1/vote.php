<?php

require("fonctions1.inc");

$candidats = array("pierre" => 0, "marie" => 0, "paul" => 0, "toto" => 0);


function finvote($tab) {
	echo "Voici le classement final des votes: \n\n";
	arsort($tab);
	$i = 1;
	$total = 0;
	foreach ($tab as $nom => $nbvote) {
		$total += $nbvote;
	}
	foreach ($tab as $nom => $nbvote) {
		$percent = ($nbvote*100)/$total;
		// 1) Pierre | 5 votes !
		echo $i.") ".$nom." | ".$nbvote." votes avec un total de ".$percent." % !\n";
		$i++; // i = i + 1;
	}
}

while (true) {
	echo "Pour qui souhaitez vous voter ? ";
	$nom = lire();
	if ($nom == "fin") {
		echo "le vote est clos !!\n";
		finvote($candidats);
		break;
	}
	if (array_key_exists($nom, $candidats)) {
		echo "Vous avez voté pour ".$nom." !!\n";
		$candidats[$nom] += 1;
	}
	else {
		echo "ce candidat nexiste pas !!\n";
	}
}

?>
