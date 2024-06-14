<?php
include 'db.php';

$id = $_GET['id'];

$sqlState = $conn -> prepare('DELETE FROM student WHERE ID=?');
$sqlState -> execute([$id]);

header('location: index.php');
?>