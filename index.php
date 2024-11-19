<?php include 'db_connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Study Platform Home</title>
    <style>
        /* Enhanced styling for the layout */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f9fc;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            text-align: center;
            margin: 20px auto;
            padding: 20px;
            max-width: 1000px;
        }
        h1 {
            color: #2c3e50;
            margin-bottom: 20px;
        }
        p {
            color: #34495e;
            font-size: 16px;
        }
        .feature-box {
            display: inline-block;
            background: linear-gradient(135deg, #e6f7ff, #cce7f0);
            padding: 25px;
            margin: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s, box-shadow 0.3s;
            width: 260px;
            text-align: left;
        }
        .feature-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }
        .feature-box h2 {
            color: #333;
            margin-bottom: 10px;
            font-size: 20px;
        }
        .feature-box p {
            font-size: 14px;
            color: #555;
            margin-bottom: 15px;
        }
        .feature-box button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 25px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s, box-shadow 0.3s;
        }
        .feature-box button:hover {
            background-color: #0056b3;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .feature-box a {
            text-decoration: none;
        }
        @media (max-width: 768px) {
            .feature-box {
                width: 90%;
                margin: 15px auto;
            }
        }
    </style>
</head>
<body>
    <div class="container">
<a href="logout.php" style="
    position: absolute;
    top: 10px;
    right: 10px;
    text-decoration: none;
    color: #007bff;
    background: #ffffff;
    padding: 8px 15px;
    border-radius: 5px;
    font-size: 14px;
    font-weight: 600;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s ease, color 0.3s ease, box-shadow 0.3s ease;">
    Logout
</a>

        <h1>Welcome to the Study Platform</h1>
        <p>Choose from our available features below:</p>
        <div class="feature-box">
            <h2>Notes</h2>
            <p>Upload, search, and download notes shared by peers.</p>
            <a href="notes_dashboard.php"><button>Explore Notes</button></a>
        </div>
        <div class="feature-box">
            <h2>Study Groups</h2>
            <p>Collaborate with fellow students in study groups and sessions.</p>
            <a href="study_groups.php"><button>Join Study Groups</button></a>
        </div>
    </div>
</body>
</html>
