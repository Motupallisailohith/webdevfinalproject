<?php
// pages/create.php
include('../includes/session.php');
include('../includes/db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = $_POST['data'];
    
    $sql = "INSERT INTO data_table (user_id, data) VALUES ('" . $_SESSION['user_id'] . "', '$data')";
    
    if (pg_query($conn, $sql)) {
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Error: " . pg_last_error($conn);
    }
}
?>

<form method="POST">
    <label>Data</label>
    <input type="text" name="data" required>
    <button type="submit">Create</button>
</form>
