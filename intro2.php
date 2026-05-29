<?php
$name = "ภูริวัจน์ อนุพงศ์เมธี";
$age = 18;
$bio = "สวัสดีครับ ผมชื่อ $name อายุ $age ปี ยินดีที่ได้รู้จักครับ";
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้าแนะนำตัว</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 700px;
            margin: 40px auto;
            padding: 20px;
            background: #f7f7f7;
            color: #333;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.08);
        }
        h1 {
            color: #0066cc;
        }
        .profile {
            margin-top: 20px;
            line-height: 1.8;
        }
        .label {
            font-weight: bold;
            color: #444;
        }
    </style>
</head>
<body>
    <h1>แนะนำตัว</h1>
    <div class="profile">
        <p><span class="label">ชื่อ:</span> <?php echo $name; ?></p>
        <p><span class="label">อายุ:</span> <?php echo $age; ?> ปี</p>
        <p><?php echo $bio; ?></p>
    </div>
</body>
</html>