<?php
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $topic = $_POST['topic'];
    $meetingLink = $_POST['meeting_link'];
    $startTime = $_POST['start_time'];

    $stmt = $conn->prepare("INSERT INTO study_groups (topic, meeting_link, start_time, creation_date) VALUES (?, ?, ?, NOW())");
    $stmt->bind_param("sss", $topic, $meetingLink, $startTime);
    $stmt->execute();
    $stmt->close();
    header("Location: study_groups.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create Study Group</title>
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
        .form-container {
            background-color: #e6f7ff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        label {
            text-align: left;
            color: #333;
        }
        input[type="text"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
        }
        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Create New Study Group</h1>
        <div class="form-container">
            <form action="create_group.php" method="post">
                <label for="topic">Topic:</label>
                <input type="text" id="topic" name="topic" required>
                
                <label for="meeting_link">Meeting Link:</label>
                <input type="text" id="meeting_link" name="meeting_link" required>
                
                <label for="start_time">Start Time (HH:MM):</label>
                <input type="text" id="start_time" name="start_time" required>
                
                <button type="submit">Create Group</button>
            </form>
        </div>
    </div>
</body>
</html>
