<?php
include('../includes/db.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];

    $query = "INSERT INTO data (title, description) VALUES ($1, $2)";
    $result = pg_query_params($conn, $query, array($title, $description));

    if ($result) {
        header('Location: view_data.php');
        exit();
    } else {
        echo "Error: Could not add data.";
    }
}
?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="../css/style.css"></head>
<body>
<h2>Add Data</h2>
<form method="POST">
    <input type="text" name="title" placeholder="Title" required>
    <textarea name="description" placeholder="Description" required></textarea>
    <button type="submit">Add</button>
</form>
</body>
</html>
