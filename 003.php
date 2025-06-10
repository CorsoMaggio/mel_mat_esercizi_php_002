
<?php
$order = 'mazzate';
$price;


switch ($order) {
    case 'pizza':
        $price = 6;
        echo "Hai ordinato $order . Il costo è di $price euro";
        break;
    case 'birra':
        $price = 3;
        echo "Hai ordinato $order . Il costo è di $price euro";
        break;
    case 'panino':
        $price = 8;
        echo "Hai ordinato $order . Il costo è di $price euro";
        break;
    case 'dessert':
        $price = 3;
        echo "Hai ordinato $order . Il costo è di $price euro";
        break;
    case 'insalata':

        echo "Hai ordinato $order . Non disponibile";
        break;
    default:
        echo "$order non è valido";
        break;
}
