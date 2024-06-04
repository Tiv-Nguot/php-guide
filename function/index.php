<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Function Example</title>
</head>
<body>
    <h1>Function</h1>
    <?php
    // Define a function to generate an unordered list
    function generateList($items) {
        // Start the unordered list
        $html = "<ul>";

        // Loop through the array of items
        foreach ($items as $item) {
            // Generate a list item for each element in the array
            $html .= "<li>$item</li>";
        }

        // End the unordered list
        $html .= "</ul>";

        // Return the generated HTML
        return $html;
    }

    // Define an array of items
    $items = ["Item 1", "Item 2", "Item 3", "Item 4", "Item 5"];

    // Call the function and echo its output
    echo generateList($items);
    ?>
</body>
</html>
