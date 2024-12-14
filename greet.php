<?php
$username = $_POST['username'];

date_default_timezone_set("Asia/Calcutta");

$currentHour = (int) date("H");

if ($currentHour >= 5 && $currentHour < 12) {
    $greeting = "Good Morning";
} elseif ($currentHour >= 13 && $currentHour < 17) {
    $greeting = "Good Afternoon";
} elseif ($currentHour >= 18 && $currentHour < 21) {
    $greeting = "Good Evening";
} elseif($currentHour >= 22 || $currentHour < 5) {
    $greeting = "Good Night";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greeting</title>

    <style>
        body{
            background-color: #080710;
            color : #ffffff;
            font-family: 'Poppins', sans-serif;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        h1{
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        p{
            font-size: 1.4rem;
        }

    </style>
</head>
<body>
    <h1><?php echo $greeting; ?>, <?php echo $username; ?>!</h1>
    <p>Have A Great Day Ahead!</p>
</body>
</html>
