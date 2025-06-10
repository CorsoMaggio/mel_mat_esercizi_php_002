<?php
$order = 'te meno';
$price;
$price = match ($order) {
    'panino' => 8,
    'pizza' => 6,
    'dessert' => 3,
    'birra' => 3,
    default => 0
};
if ($price) {
    echo "Hai ordinato $order . Il costo è di $price euro";
} else {
    echo "$order non valido";
}
