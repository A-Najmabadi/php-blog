<?php
include_once 'database_conf.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liara PHP Blog</title>
    <link rel="stylesheet" href="static/styles.css">
</head>
<body>

<?php include_once 'header_in.php'; ?>

<div class="container">
    <?php
    // Database connection
    include_once 'database_conf.php';

    // Display posts in descending order of creation time
    $sql = "SELECT * FROM posts ORDER BY created_at DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<div class='post'>";
            echo "<h2>" . $row["title"]. "</h2>";
            echo "<p>" . $row["content"]. "</p>";
            echo "<img src='" . $row["image"]. "'><br><br>";
            echo "</div>";
        }
    } else {
        echo "<p class='error-message'>No Posts to show.</p>";
    }
    ?>
</div>

</body>
</html>
