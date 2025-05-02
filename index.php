<?php
// You can dynamically fetch this from session, database, or form
$name = "Guest";

// Time-based greeting
$hour = date('H');
if ($hour < 12) {
    $greeting = "Good morning";
} elseif ($hour < 18) {
    $greeting = "Good afternoon";
} else {
    $greeting = "Good evening";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Welcome, <?php echo htmlspecialchars($name); ?>!</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    @keyframes gradientBG {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(-45deg, #00c6ff, #0072ff, #00c6ff, #0072ff);
      background-size: 400% 400%;
      animation: gradientBG 15s ease infinite;
      color: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .container {
      background: rgba(255, 255, 255, 0.1);
      border-radius: 20px;
      padding: 40px;
      box-shadow: 0 8px 32px rgba(0,0,0,0.3);
      backdrop-filter: blur(10px);
      max-width: 500px;
      width: 90%;
      text-align: center;
    }

    .avatar {
      width: 80px;
      height: 80px;
      background-color: #fff;
      border-radius: 50%;
      margin: 0 auto 20px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #0072ff;
      font-size: 2.5em;
      font-weight: bold;
    }

    h1 {
      font-size: 2.5em;
      margin-bottom: 10px;
    }

    p {
      font-size: 1.2em;
      margin-bottom: 30px;
    }

    .btn {
      padding: 12px 25px;
      background: #fff;
      color: #0072ff;
      border: none;
      border-radius: 25px;
      font-size: 1em;
      font-weight: bold;
      cursor: pointer;
      text-decoration: none;
      transition: background 0.3s, color 0.3s;
    }

    .btn:hover {
      background: #0072ff;
      color: #fff;
    }

    @media (max-width: 500px) {
      h1 {
        font-size: 2em;
      }

      .btn {
        width: 100%;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="avatar">
      <?php echo strtoupper(substr($name, 0, 1)); ?>
    </div>
    <h1><?php echo $greeting; ?>, <?php echo htmlspecialchars($name); ?>!</h1>
    <p>Welcome to our website. Let’s make your experience amazing!</p>
    <a href="home.php" class="btn">Enter Site</a>
  </div>
</body>
</html>
<?php 