<?php
/*Utilizzando il costrutto While (Pre-Condizionale), realizzare un sistema di "Aggiungi al carrello" 
in modo tale da eseguire delle operazioni di somma fino al raggiungimento del budget massimo inserito 
dall’utente appena eseguirete il programma: //Ad Esempio

// valore preso in input da readline
//$input = trim(fgets(STDIN));


//Aggiungo articolo 1

$costo_articolo_1 = 5;// valore preso in input da readline
$budget = $budget - costo_articolo_1;

//Budget Rimanente 5 Euro;

//....​Nel costrutto while, una volta definita la condizione, dovrete di volta in volta chiedere all’utente 
il costo dell’articolo e visualizzare a schermo il budget Rimanente. Nel momento in cui il budget sarà 0 
il programma terminerà l'esecuzione. ATTENZIONE: Gestire l’eventualità in cui venga scritto un prezzo maggiore
 del budget a disposizione; Il Budget rimanente non potrà mai assumere un valore negativo;*/
$budget = 70;



while ($budget > 0) {
    echo "inserisci il prezzo del tuo articolo: \n";
    $cart = trim(fgets(STDIN));
    if ($cart > $budget) {
        echo "Il prezzo che hai inserito è maggiore del tuo budget di $budget euro. \n";
        continue;
    } else {
        $budget = $budget - $cart;
        echo "Articolo aggiunto al carrello.\n";
        echo "Budget rimanente: $budget euro.";
        if ($budget == 0) {
            echo "hai finito i soldi!!";
            break;
        } else {
            echo "Vuoi continuare ad acquistare? si/no";
            $input = trim(fgets(STDIN));
        }
        if ($input == "si") {
            continue;
        } else {
            echo "Arrivederci!";
            break;
        }
    }
}
