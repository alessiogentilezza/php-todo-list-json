<?php

if (file_exists('database.json')) {

    //leggo il file json come stringa
    $string = file_get_contents('database.json');
    //decodifica i dati come come una variabile php
    $todoList = json_decode($string, true);
} else {
    $todoList = [];
}

if (isset($_POST["newItem"]) && ($_POST["newItem"]) > 0) {

    //creo una variabile $... per gli elementi che voglio inserire 
    $new_Item = ["text" => $_POST["newItem"], "done" => false];

    //richianmo direttamrnte la variabile $... aggiungendo gli elementi all'array
    $todoList[] = $new_Item;

    //codifico l'array in un formato json
    $new_String = json_encode($todoList);

    //scrivo i dati nel file .json
    file_put_contents('database.json', $new_String);
}

//converto l'array todoList php in json per main.js (FRONT)
header('Content-Type: application/json');
echo json_encode($todoList);
