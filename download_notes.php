<?php
include 'db_connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Download Notes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 50px auto;
            background-color: #e6f7ff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }
        .note-list {
            margin-top: 20px;
        }
        .note-item {
            padding: 10px;
            margin-bottom: 15px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
        .note-item p {
            margin: 0;
            color: #333;
        }
        .note-item a {
            color: #007bff;
            text-decoration: none;
        }
        .note-item a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Available Notes for Download</h1>
        <div class="note-list">
            <?php
            $result = $conn->query("SELECT * FROM notes ORDER BY upload_date DESC");

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='note-item'>
                            <p><strong>Title:</strong> {$row['title']}</p>
                            <p><strong>Description:</strong> {$row['description']}</p>
                            <p><a href='{$row['file_path']}' download>Download</a></p>
                          </div>";
                }
            } else {
                echo "<p class='no-results'>No notes available for download at the moment.</p>";
            }

            $result->free();
            ?>
        </div>
    </div>
</body>
</html>
