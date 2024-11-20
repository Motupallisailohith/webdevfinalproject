<?php
// pages/delete.php
include('../includes/session.php');
include('../includes/db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data_id = $_POST['data_id'];
    
    $sql = "DELETE FROM data_table WHERE id='$data_id' AND user_id='" . $_SESSION['user_id'] . "'";
    
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
    <button type="submit">Delete</button>
</form>
