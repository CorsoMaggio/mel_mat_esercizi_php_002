<?php
// metodo match

$role = "Admin";
$output = match ($role) {
    'Admin' => 'Sono un admin',
    'Moderatore' => 'Sono un modderatore',
    default => 'Non trovato'
};
