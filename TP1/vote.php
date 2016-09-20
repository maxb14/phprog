<?php

require("fonctions1.inc");

$candidats = array("pierre", "marie");
$countm = 0;
$countp = 0;

while (true) {
      echo "Pour qui souhaitez vous voter ? ";
      $nom = lire();
      if ($nom == "fin") {
      	 $pm = 0;
	 $pp = 0;
	 if (($countm or $countp) > 0) {
      	    $pm = ($countm*100)/($countm+$countp);
	    $pp = ($countp*100)/($countm+$countp);
	 }
      	 echo "fin du vote\n";
	 echo "Marie a obtenu ".$countm." votes !! => ".$pm." % !!\n";
	 echo "Pierre a obtenu ".$countp." votes !! => ".$pp." % !!\n";
	 if ($countm > $countp) {
	    echo "Marie gagne !\n";
	 }
	 elseif ($countm < $countp) {
	 	echo "Pierre gagne !!\n";
	 }
	 else {
	      echo "Egalité entre les deux candidats !!\n";
	 }

	 break;
      }
      if (in_array($nom ,$candidats)) {
      	 echo "Vous avez voté pour ".$nom." !!\n";
	 if ($nom == "marie") {
	    $countm++;
	 }
	 if ($nom == "pierre") {
	      $countp++;
	 }		
      }
      else {
      	   echo "ce candidat nexiste pas !!\n";
      }
}

?>