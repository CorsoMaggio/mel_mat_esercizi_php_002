<?php
/*Utilizzando la logica appena appresa con l’operatore Modulo, scrivere un programma che stampi in console tutti i numeri da 1 a 30.

Se il numero e’ multiplo di 3 deve stampare “PHP”;
Se multiplo di 5 deve stampare “JAVASCRIPT”;
Se multiplo di 3 e 5 (15) deve stampare “Francesco”;*/
for ($i = 0; $i <= 30; $i++) {
    if ($i % 15 == 0) {
        echo "Francesco,";
    } else if ($i % 5 == 0) {
        echo "Javascript,";
    } else if ($i % 3 == 0) {
        echo "PHP,";
    } else {
        echo "$i,";
    }
}
