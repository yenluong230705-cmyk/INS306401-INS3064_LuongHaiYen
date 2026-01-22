<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome Page - INS3064</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .container {
            text-align: center;
            background: #fff;
            padding: 40px 60px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            width: 520px;
            max-width: 90%;
        }

        h1 {
            margin: 0 0 8px;
            color: #333;
        }

        .subtitle {
            margin: 0 0 20px;
            color: #666;
        }

        .info {
            margin-top: 18px;
            background: #f5f5f5;
            padding: 18px 20px;
            border-radius: 10px;
            text-align: left;
        }

        .info p {
            margin: 10px 0;
            color: #333;
            font-size: 16px;
        }

        .label {
            font-weight: bold;
            display: inline-block;
            width: 120px;
            color: #444;
        }
    </style>
</head>
<body>
<?php
// ===== Student Info =====
$name = "Luong Hai Yen";
$studentId = "23070019";
$class = "ICE2023A";
$email = "23070019@vnu.edu.vn";

// ===== Date & Time =====
date_default_timezone_set("Asia/Ho_Chi_Minh");
$currentDate = date("l, F d, Y");
$currentTime = date("H:i:s");
?>
    <div class="container">
        <h1>Hello PHP!</h1>
        <p class="subtitle">Chào mừng bạn đến với môn INS3064</p>

        <div class="info">
            <p><span class="label">Name:</span> <?= htmlspecialchars($name) ?></p>
            <p><span class="label">Student ID:</span> <?= htmlspecialchars($studentId) ?></p>
            <p><span class="label">Class:</span> <?= htmlspecialchars($class) ?></p>
            <p><span class="label">Email:</span> <?= htmlspecialchars($email) ?></p>
            <p><span class="label">Date:</span> <?= $currentDate ?></p>
            <p><span class="label">Time:</span> <?= $currentTime ?></p>
        </div>
    </div>
</body>
</html>
