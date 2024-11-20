<?php
include('../includes/db.php');
session_start();

$query = "SELECT * FROM data ORDER BY created_at DESC";
$result = pg_query($conn, $query);
?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="../css/style.css"></head>
<body>
<h2>View Data</h2>
<table>
    <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Actions</th>
    </tr>
    <?php while ($row = pg_fetch_assoc($result)) { ?>
        <tr>
            <td><?= $row['title'] ?></td>
            <td><?= $row['description'] ?></td>
            <td>
                <a href="update_data.php?id=<?= $row['id'] ?>">Update</a>
                <a href="delete_data.php?id=<?= $row['id'] ?>">Delete</a>
            </td>
        </tr>
    <?php } ?>
</table>
</body>
</html>
