<?php
// Indexed array
$fruits = ["Apple", "Banana", "Cherry"];

// Associative array
$person = [
    "first_name" => "John",
    "last_name" => "Doe",
    "age" => 30
];

// Multidimensional array
$people = [
    ["name" => "Alice", "age" => 25],
    ["name" => "Bob", "age" => 28],
    ["name" => "Charlie", "age" => 22]
];

// Adding elements
$fruits[] = "Orange";
$person["gender"] = "male";

// Modifying elements
$fruits[0] = "Strawberry";
$person["age"] = 31;

// Removing elements
unset($fruits[1]);
unset($person["last_name"]);

// Output arrays
print_r($fruits);
print_r($person);
print_r($people);

// Looping through arrays
foreach ($fruits as $fruit) {
    echo $fruit . "\n";
}

foreach ($person as $key => $value) {
    echo $key . ": " . $value . "\n";
}

// Array functions
echo "Number of fruits: " . count($fruits) . "\n";
$merged_array = array_merge($fruits, ["Carrot", "Lettuce", "Pepper"]);
print_r($merged_array);
$key = array_search("Cherry", $fruits);
echo "Index of Cherry: " . $key . "\n";
?>
