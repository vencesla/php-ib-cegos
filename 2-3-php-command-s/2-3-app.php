<?php
// insérer votre code

$fields = array('nom','prenom','email');
$values = array();
$pos = 0;

do {
    if($pos < count($fields)) {
        $str = sprintf("Saisissez votre %s: ", $fields[$pos] );
        $input = readline($str);

        $cmd = trim(strtolower($input));

        if($cmd != 'bye') {
            $values[] = $input;
        }

        $pos++;
    } else {
        echo sprintf("Votre contact est %s %s (%s):", $values[0], $values[1], $values[2] );
        $cmd = 'bye';
    }
}
while( $cmd != 'bye');

exit(0);

?>