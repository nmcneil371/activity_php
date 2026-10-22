<?php
date_default_timezone_set("America/New_York");

// Three different variable types
$name = "Naquan McNeil"; // String
$lessons = 3;           // Integer
$isStudent = true;      // Boolean

// Function using two variables
function showProgress($studentName, $lessonCount) {
    return "$studentName is learning $lessonCount basic PHP elements.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Activity</title>
</head>
<body>
    <h1>Exploring Basic PHP Elements</h1>

    <p><?php echo $name; ?></p>
    <p><?php echo date("F j, Y"); ?></p>

    <?php
    echo "<h2>" . showProgress($name, $lessons) . "</h2>";

    echo "<p>Student status: " . ($isStudent ? "Yes" : "No") . "</p>";

    echo "<p>JavaScript can run in the browser to make web pages interactive, while PHP runs on the server to generate page content. Both languages support variables and functions.</p>";
    ?>
</body>
</html>
