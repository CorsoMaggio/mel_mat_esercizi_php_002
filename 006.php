<?php
// realizzare un ciclo for che:

// Se il genere e’ M stampare “Buongiorno Sig. $nome”
// Se e’ F stampare “Buongiorno Sig.ra $nome” .
// Se non è definito Stampare “$nome ha preferito non specificare."
$students = [
    [
        'name' => 'Marco',
        'gender' => 'M',
    ],
    [
        'name' => 'Vanessa',
        'gender' => 'F',
    ],
    [
        'name' => 'Jack',
        'gender' => 'M',
    ],
    [
        'name' => 'Mari*',
        'gender' => '',
    ],
];

for ($i = 0; $i < count($students); $i++) {
    if ($student['gender'] == 'M') {
        echo  "Buongiorno Sig. " . $student['name'] . "./n";
    } else if ($students[$i]['gender'] == 'F') {
        echo  "Buongiorno Sig.ra " . $students[$i]['name'] . "./n";
    } else {
        echo $students[$i]['name'] . " ha preferito non specificare.";
    }
}
