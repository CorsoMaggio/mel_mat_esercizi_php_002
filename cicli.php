<?php
//ciclo for: ripeti per- quando il min e il max sono noti!!

//stampare i numeri da 1 a 100
for ($i = 0; $i <= 5; $i++) {
    echo $i . "\n";
}

$students = [
    [
        'name' => 'Marco',
        'age' => 21,
    ],
    [
        'name' => 'Maria',
        'age' => 22,
    ],
    [
        'name' => 'Jack',
        'age' => 16,
    ],
];
for ($i = 0; $i < count($students); $i++) {
    echo "ciao" . $students[$i]['name'] . "\n";
    if ($students[$i]['age'] >= 18) {
        echo $students[$i]['name'] . ": sei maggiorenne \n";
    } else {
        echo $students[$i]['name'] . " :sei minorenne \n";
    }
}
