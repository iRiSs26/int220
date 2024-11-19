<!DOCTYPE html>
<html lang="en">
<head>
    <title>Notes Dashboard</title>
    <style>
        /* Enhanced page styling */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9fbfd;
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
            max-width: 1200px;
        }
        h1 {
            color: #2c3e50;
            margin-bottom: 20px;
            font-size: 32px;
        }
        p {
            color: #34495e;
            font-size: 16px;
            margin-bottom: 40px;
        }
        .feature-box {
            display: inline-block;
            background: linear-gradient(135deg, #e6f7ff, #d0f0ff);
            padding: 25px;
            margin: 15px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 280px;
            text-align: left;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .feature-box:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }
        .feature-box h2 {
            color: #333;
            font-size: 20px;
            margin-bottom: 10px;
        }
        .feature-box p {
            font-size: 14px;
            color: #555;
            margin-bottom: 20px;
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
                margin: 10px auto;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Notes Dashboard</h1>
        <p>Choose from the options below:</p>
        
        <div class="feature-box">
            <h2>Upload Notes</h2>
            <p>Share your notes with peers by uploading them to the platform.</p>
            <a href="upload_notes.php"><button>Upload Notes</button></a>
        </div>

        <div class="feature-box">
            <h2>Search Notes</h2>
            <p>Find notes shared by others and enhance your study experience.</p>
            <a href="search_notes.php"><button>Search Notes</button></a>
        </div>

        <div class="feature-box">
            <h2>Download Notes</h2>
            <p>Access and download notes for your studies anytime.</p>
            <a href="download_notes.php"><button>Download Notes</button></a>
        </div>
    </div>
</body>
</html>
