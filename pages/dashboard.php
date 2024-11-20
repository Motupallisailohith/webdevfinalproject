<?php
// pages/dashboard.php
include('../includes/session.php');

echo "Welcome, " . $_SESSION['username'] . "!";
?>

<a href="create.php">Create Data</a>
<a href="update.php">Update Data</a>
<a href="delete.php">Delete Data</a>
<a href="logout.php">Logout</a>
