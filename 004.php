<?php
//Presi tutti i numeri da 1 a 10, scrivere un programma che calcoli la somma di tutti i numeri pari tralasciando quelli dispari;

//TIPS: Per verificare se un numero è pari o dispari, dovete controllare se il resto della divisione per 2 sia 0 (FALSE) o 1 (TRUE).
$somma = 0;
for ($i = 0; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        $somma = $somma + $i;
    }
}
echo "La somma è di: $somma";
