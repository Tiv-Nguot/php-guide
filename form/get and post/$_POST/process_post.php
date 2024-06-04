<?php
if (isset($_POST['name']) && isset($_POST['age'])) {
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);
    echo "Name: " . $name . "<br>";
    echo "Age: " . $age . "<br>";
} else {
    echo "Please provide name and age.";
}
?>
