<?php
$jsonContact = '{
    "name": "ANGGIRATNASARI",
    "age": 20,
    "phones": ["123-456-7890", "987-654-3210"]
}';

// Decode ke PHP Object
$contactObj = json_decode($jsonContact);

// Mengakses nilai dari object
echo $contactObj->name;
echo $contactObj->age;
echo implode(", ", $contactObj->phones);

// Decode ke PHP Array
$contactArray = json_decode($jsonContact, true);

// Mengakses nilai dari array
echo $contactArray['name'];
echo $contactArray['age'];
echo implode(", ", $contactArray['phones']);
?>