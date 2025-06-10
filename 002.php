<?php

$birthYear = 2027;
$currentYear = 2025;
$age = $currentYear - $birthYear;


if ($birthYear > $currentYear) {
    echo 'Il numero da te inserito non può essere elaborato';
} else if ($age >= 4) {
    echo 'Il nostro sistema ha calcolato che hai: ' . $age . ' anni.';
} else {
    echo "troppo piccolo per scrivere a macchina";
}
