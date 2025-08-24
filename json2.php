<?php

$person = [
    'name' => 'John Deo',
    'age' => '23',
    'hobbies' => ['Tennis', 'Swimming'],
];

$json = json_encode($person, JSON_PRETTY_PRINT);
file_put_contents("person.json", $json);
