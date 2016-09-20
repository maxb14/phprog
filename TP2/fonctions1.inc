<?php
 function lireligne ()
   {    // lit une chaine de caractères saisie au clavier SANS enlever 
        // le retour chariot final.

        $f = fopen("/dev/tty","r") ;
        if (!$f)  print "erreur" ;
        $chaine = fgets($f, 256) ;
        return $chaine ;  
} 
  
   function lire ()
   {   // lit une chaine de caractères saisie au clavier et 
       // enlève le retour chariot final.

        $f = fopen("/dev/tty","r") ;
        if (!$f)  print "erreur" ;
        else  {
            $chaine = fgets($f, 256) ;
            $n=strpos($chaine,"\n") ;
            $chaine = substr($chaine,0,$n) ;
            return $chaine;
        }  

    } 



// rand($BorInf, $BorSup) renvoie un nombre entre [$BorInf, $BorSup]
   
   srand((double)microtime()*1000000);

   function choix()
   {
     $choix = rand(0,100) ;
     return $choix ;
   }  
 
   function choixN($N) {
      $choix = rand(0,$N) ;
      return $choix ;
   }
?>


