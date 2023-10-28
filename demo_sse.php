<!DOCTYPE html>
<html>
<head>
    <title>Form Processing</title>
</head>
<body>
    <h1>Form Processing</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        echo "Hello, " . $name . "! Welcome to our website.";
    }
    ?>
</body>
</html>
