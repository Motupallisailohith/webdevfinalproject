<?php
// pages/view.php
include('../includes/session.php');
include('../includes/db.php');

$sql = "SELECT * FROM data_table WHERE user_id='" . $_SESSION['user_id'] . "'";
$result = pg_query($conn, $sql);

while ($row = pg_fetch_assoc($result)) {
    echo "Data: " . $row['data'] . "<br>";
}
?>
