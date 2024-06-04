<?php
if (isset($_GET['name']) && isset($_GET['age'])) {
    $name = htmlspecialchars($_GET['name']);
    $age = htmlspecialchars($_GET['age']);
    echo "Name: " . $name . "<br>";
    echo "Age: " . $age . "<br>";
} else {
    echo "Please provide name and age.";
}
?>
