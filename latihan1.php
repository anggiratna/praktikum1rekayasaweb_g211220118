<?php
$data = array(
    "name" => "anggiratna",
    "age" => 20,
    "hobbies" => array("Reading", "Traveling", "Swimming", "Singing")
);

$json = json_encode($data, JSON_PRETTY_PRINT);
echo $json;
/*
Output:
{
    "name": "anggiratna",
    "age": 20,
    "hobbies": 
    [
        "Reading",
        "Traveling",
        "Swimming"
        "Singing
    ]
}
*/
?>