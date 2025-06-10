
<?php
$order = 'panino';
$price;


switch ($order) {
    case 'pizza':
        $price = 6;

        break;
    case 'birra':
        $price = 3;

        break;
    case 'panino':
        $price = 8;

        break;
    case 'dessert':
        $price = 3;

    default:
        $price = 0;
        break;
}
if ($price) {
    echo "Hai ordinato $order . Il costo è di $price euro";
} else {
    echo "$order non valido";
}
