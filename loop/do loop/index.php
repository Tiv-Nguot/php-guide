<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do...While Loop Example</title>
</head>
<body>
    <h1>Do loop</h1>
    <?php
    // Define an array of items
    $items = ["Item 1", "Item 2", "Item 3", "Item 4", "Item 5"];
    
    // Get the number of items
    $numItems = count($items);
    
    // Initialize the counter
    $i = 0;

    // Start the unordered list
    echo "<ul>";

    // Loop through the array of items using a do...while loop
    do {
        // Generate a list item for each element in the array
        echo "<li>{$items[$i]}</li>";
        // Increment the counter
        $i++;
    } while ($i < $numItems);

    // End the unordered list
    echo "</ul>";
    ?>
</body>
</html>
