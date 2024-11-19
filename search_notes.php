<?php
include 'db_connection.php';
$query = isset($_GET['query']) ? $_GET['query'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search Results</title>
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
            padding: 15px;
            margin-bottom: 15px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
        .note-item p {
            margin: 5px 0;
            color: #333;
        }
        .note-item a {
            display: inline-block;
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
            padding: 5px 10px;
            background-color: #e6f7ff;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }
        .note-item a:hover {
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
        }
        .no-results {
            text-align: center;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Search Results</h1>
        <div class="note-list">
            <?php
            $stmt = $conn->prepare("SELECT * FROM notes WHERE title LIKE ? OR description LIKE ? ORDER BY upload_date DESC");
            $searchTerm = "%" . $query . "%";
            $stmt->bind_param("ss", $searchTerm, $searchTerm);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='note-item'>
                            <p><strong>Title:</strong> {$row['title']}</p>
                            <p><strong>Description:</strong> {$row['description']}</p>
                            <p><a href='{$row['file_path']}'>Download</a></p>
                          </div>";
                }
            } else {
                echo "<p class='no-results'>No results found for '<strong>$query</strong>'</p>";
            }

            $stmt->close();
            ?>
        </div>
    </div>
</body>
</html>
