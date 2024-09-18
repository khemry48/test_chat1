<?php
include_once("connect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test-chat</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <div class="flex justify-center">
        <h1 class="text-3xl font-bold mt-14">
            chat k
        </h1>
    </div>
    <form action="send.php" method="POST">
        <div class="flex justify-center mt-8">
            <input type="text" name="message" class="h-12 px-4 text-lg border-2 border-gray-300 rounded-lg w-1/3">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-4 w-1/12">ส่ง</button>
        </div>
    </form>

    <div class="flex flex-col mt-24 p-5 items-center">
        <?php
        $sql = "SELECT * FROM love ORDER BY id DESC";
        $result = $conn->query($sql);
        if ($result->rowCount() > 0) {
            while ($row = $result->fetch()) {
                $date = new DateTime($row['date']);
        ?>
                <div class="w-1/3 bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 text-center mt-5">
                    <div class="flex justify-end gap-2">
                        <form action="delete.php" method="POST">
                            <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded" onclick="editItem(<?= $row['id'] ?>)">แก้ไข</button>
                            <button type="button" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded" onclick="deleteItem(<?= $row['id'] ?>)">ลบ</button>
                        </form>
                    </div>
                    <p><?= $row['message'] ?></p>
                    <p class="text-xs text-gray-500"><?= $date->format('d/m/Y H:i:s') ?></p>
                </div>
        <?php

            }
        } else {
            echo "No Messages";
        }
        ?>
    </div>
</body>
<script>
        function deleteItem(id) {
            window.location.href = 'delete.php?id=' + id; 
        }

        function editItem(id) {
            window.location.href = 'edit.php?id=' + id; 
        }
</script>

</html>