<?php
// pages/update.php
include('../includes/session.php');
include('../includes/db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data_id = $_POST['data_id'];
    $new_data = $_POST['data'];
    
    $sql = "UPDATE data_table SET data='$new_data' WHERE id='$data_id' AND user_id='" . $_SESSION['user_id'] . "'";
    
    if (pg_query($conn, $sql)) {
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Error: " . pg_last_error($conn);
    }
}
?>

<form method="POST">
    <label>Data ID</label>
    <input type="text" name="data_id" required>
    <label>New Data</label>
    <input type="text" name="data" required>
    <button type="submit">Update</button>
</form>
