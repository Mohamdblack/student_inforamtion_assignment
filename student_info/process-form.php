<!DOCTYPE html>
<html>

<head>
    <title>Full infromation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<div class='container mt-5'>";
        echo "<h2 class='mb-4 text-center'>Full Information</h2>";
        echo "<table class='table table-bordered table-striped'>";
        echo "<thead class='thead-dark'><tr><th>Field</th><th>Value</th></tr></thead>";
        echo "<tbody>";

        foreach ($_POST as $field => $value) {
            echo "<tr><td>$field</td><td>$value</td></tr>";
        }

        echo "</tbody>";
        echo "</table>";
        echo "</div>";
    }
    ?>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>