<?php

$todoList = [
    [
        "text" => "farina",
        "done" => true,
    ],
    [
        "text" => "latte",
        "done" => false,
    ],
    [
        "text" => "uova",
        "done" => true,
    ],
    [
        "text" => "lievito",
        "done" => false,
    ]
];

if (isset($_POST["newItem"])) {
    $new_Item = ["text" => $_POST["newItem"]];
    $todoList[] = $new_Item;
}

header('Content-Type: application/json');
echo json_encode($todoList);
