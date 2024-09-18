<?php
include_once("connect.php");

$id = $_GET['id'];
$query = query("SELECT * FROM love WHERE id = ?", array($id));
$data = $query->fetch();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#d6c9fd]">
    <div class="flex justify-center mt-24">
        <form action="update.php" method="POST">
            <input type="hidden" name="id" value="<?= $data['id'] ?>">
            <div>
                <input type="text" class="h-12 px-4 text-lg border-2 border-gray-300 rounded-lg w-1/3 text-lg w-full mt-5" name="message" value="<?= $data['message'] ?>">
            </div>
            <div class="flex justify-center mt-5">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" formaction="update.php">บันทึก</button>
            </div>
        </form>
    </div>
</body>

</html>