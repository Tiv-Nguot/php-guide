<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);

    // Process the form data (e.g., save to database, send email, etc.)
    // For this example, we'll just display the data

    echo "<h2>Thank You!</h2>";
    echo "<p>Name: $name</p>";
    echo "<p>Email: $email</p>";
} else {
    echo "<p>Invalid request method.</p>";
}
?>
