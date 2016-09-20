<?php

require("fonctions1.inc");

while (true) {
      echo "Indiquez le fichier que vous souhaitez-lire ? ";
      $nomfichier = lire();
      if (file_exists($nomfichier)) {
      	 break;
      }
      echo "\nFichier inexistant !\n";	 
}

$fichier = fopen($nomfichier, "r");
$rouge = 0;
$vert = 0;

while (!feof($fichier)) {
      $ligne = fgets($fichier);
      echo $ligne;
      switch ($ligne) {
      	     case "rouge\n":
	     	  $rouge++;
	     	  break;
	     case "vert\n":
	     	  $vert++;
	     	  break;
	     default:
		echo "couleure inconnue\n";
	     	break;
      }    
}
echo "Il y a ".$vert." fois le mot vert dans le fichier\n";
echo "Il y a ".$rouge." fois le mot rouge dans le fichier\n";

fclose($fichier);

?>