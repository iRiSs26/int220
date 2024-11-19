<?php include 'db_connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Study Groups</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            margin: 0;
            padding: 0;
        }
        .container {
            text-align: center;
            margin: 50px auto;
            width: 80%;
        }
        h1 {
            color: #333;
            margin-bottom: 30px;
        }
        .create-button {
            margin-bottom: 20px;
        }
        .create-button button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-size: 16px;
        }
        .create-button button:hover {
            background-color: #0056b3;
        }
        .study-group-list {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }
        .study-group-list div {
            background-color: #e6f7ff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
            text-align: left;
        }
        .study-group-list p {
            margin: 8px 0;
            color: #333;
        }
        .study-group-list a {
            color: #007bff;
            text-decoration: none;
        }
        .study-group-list a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Study Groups</h1>
        <div class="create-button">
            <button onclick="window.location.href='create_group.php'">Create New Study Group</button>
        </div>
        <div class="study-group-list">
            <?php
            $result = $conn->query("SELECT * FROM study_groups ORDER BY creation_date DESC");
            while ($row = $result->fetch_assoc()) {
                echo "<div>
                        <p><strong>Topic:</strong> {$row['topic']}</p>
                        <p><strong>Meeting Link:</strong> <a href='{$row['meeting_link']}'>Join</a></p>
                        <p><strong>Start Time:</strong> {$row['start_time']}</p>
                      </div>";
            }
            ?>
        </div>
    </div>
</body>
</html>
