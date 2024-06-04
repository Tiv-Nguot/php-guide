<?php
// Define variables and initialize with empty values
$name = $email = $message = "";
$nameErr = $emailErr = $messageErr = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate name
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        // Check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    // Validate email
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // Check if email address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }
    
    // Validate message
    if (empty($_POST["message"])) {
        $messageErr = "Message is required";
    } else {
        $message = test_input($_POST["message"]);
    }
}

// Function to sanitize and validate input
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
        .error { color: red; }
    </style>
  <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="mb-4">Form Validation</h2>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>">
                    <span class="error">* <?php echo $nameErr;?></span>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>">
                    <span class="error">* <?php echo $emailErr;?></span>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea class="form-control" id="message" name="message"><?php echo isset($_POST['message']) ? $_POST['message'] : ''; ?></textarea>
                    <span class="error">* <?php echo $messageErr;?></span>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <br>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                echo "<h2>Submitted Form Data:</h2>";
                echo "<p><strong>Name:</strong> " . $name . "</p>";
                echo "<p><strong>Email:</strong> " . $email . "</p>";
                echo "<p><strong>Message:</strong> " . $message . "</p>";
            }
            ?>
        </div>
    </div>
</div>
