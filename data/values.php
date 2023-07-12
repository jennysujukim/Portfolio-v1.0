<?php

require( __DIR__ . "/../Classes/Value.php");

$value_initiative = new Value ([

    "title" => "Initiative",
    "description" => "I take the initiative to tackle the challenge, using each opportunity as a chance to develop my skills."
    
]);

$value_flexibility = new Value ([

    "title" => "Flexibility",
    "description" => "I am resilient to thrive in changing environments, and actively work to integrate myself into new communities."
    
]);

$value_honesty = new Value ([

    "title" => "Honesty",
    "description" => "I believe honesty and authenticity enable me to cultivate trustworthy and positive relationships."
    
]);


$values = [

    $value_initiative,
    $value_flexibility,
    $value_honesty

];