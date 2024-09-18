<?php
include_once("connect.php");

$id = $_POST['id'];
$message = $_POST['message'];
$query = query("UPDATE love SET message = ? WHERE id = ?", array($message, $id));
echo "<script>window.location = 'index.php'</script>";