<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop Example</title>
</head>
<body>
    <?php
    // Define an array of items
    $items = ["Item 1", "Item 2", "Item 3", "Item 4", "Item 5"];

    // Start the unordered list
    echo "<ul>";

    // Loop through the array of items
    foreach ($items as $item) {
        // Generate a list item for each element in the array
        echo "<li>$item</li>";
    }

    // End the unordered list
    echo "</ul>";
    ?>
</body>
</html>
