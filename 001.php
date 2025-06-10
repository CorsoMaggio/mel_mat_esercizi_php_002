<?php
const BUDGET = 1000;
//
$cifra = 700;

if ($cifra >= BUDGET) {
    echo 'budget troppo alto, non possiamo gestirlo';
} else if ($cifra <= 1000) {
    $valore_calcolato = round(($cifra / 3), 2);
    echo 'Paga in tre comode rate da' . ' ' . $valore_calcolato;
}
