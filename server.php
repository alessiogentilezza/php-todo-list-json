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
        "item" => "lievito",
        "done" => false,
    ],
];

header('Content-Type: application/json');
echo json_encode($todoList);


