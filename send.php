<?php 

include_once("connect.php");

if (isset($_POST['message'])) {

    $message = $_POST['message'];
    $query = query("INSERT INTO love (message) VALUES (?)", array ($message));
   echo "<script>window.location = 'index.php'</script>";
} else {
    echo "<script>window.location = 'index.php'</script>";
}