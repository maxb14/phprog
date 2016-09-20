<?php

require("fonctions1.inc");



while (true) {
      echo "Quel fichier souhaitez-vous lire ? ";
      $nomfichier = lire();
      if (file_exists($nomfichier)) {
      	 break;	 
      }
      echo "\nFichier inexistant !\n\n";
}
$fichier = fopen($nomfichier, "r");
$lecture = fread($fichier, filesize($nomfichier));
echo "\nVoici le contenu du fichier: \n\n".$lecture."\n";
fclose($fichier);

?>