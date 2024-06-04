<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Form Handling Example</title>
</head>

<body>
    <div class="container">
        <h2>Contact Form</h2>
        <form action="process_form.php" method="post">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" class="form-control" required><br><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" class="form-control" required><br><br>
            <input class=" btn btn-primary" type="submit" value="Submit">
        </form>
    </div>
</body>

</html>