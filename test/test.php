<?php 

 function nombrePaireImapir(int $nombre) {
    if( $nombre % 2 == 0) {
        return "Votre nombre est pair";
    }else {
        return "Votre nombre est impair";
    }
 }

 function fact($number) {
    if($number == 0 || $number == 1) {
        return 1;
    }elseif($number > 1) {
        return $number * fact($number -1);
    }

 }

 $number = 30;
 $fact = fact($number);
 echo "Le factoriel de $number est $fact.";

 nombrePaireImapir(2.2);
fact(1);
?>