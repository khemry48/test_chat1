<?php

include_once("connect.php");

$id = $_GET['id'];
$query = query("DELETE FROM love WHERE id = ?", array($id));
$_SESSION['delete'] = 1;
echo "<script>window.location = 'index.php'</script>";
