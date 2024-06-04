<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Loop Example</title>
</head>
<body>
    <h1>While loop</h1>
    <?php
    // Define an array of items
    $items = ["Item 1", "Item 2", "Item 3", "Item 4", "Item 5"];
    
    // Get the number of items
    $numItems = count($items);
    
    // Initialize the counter
    $i = 0;

    // Start the unordered list
    echo "<ul>";

    // Loop through the array of items using a while loop
    while ($i < $numItems) {
        // Generate a list item for each element in the array
        echo "<li>{$items[$i]}</li>";
        // Increment the counter
        $i++;
    }

    // End the unordered list
    echo "</ul>";
    ?>
</body>
</html>
