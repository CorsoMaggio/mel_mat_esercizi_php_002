<?php
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

foreach ($students as $student) {
    if ($student['gender'] == 'M') {
        echo  "Buongiorno Sig. " . $student['name'] . "\n";
    } else if ($student['gender'] == 'F') {
        echo  "Buongiorno Sig.ra " . $student['name'] . "\n";
    } else {
        echo $student['name'] . " ha preferito non specificare. \n";
    }
}
