<?php
// You can customize the name or retrieve it from session/login
$name = "Guest";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Welcome Page</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #4facfe, #00f2fe);
      color: white;
      text-align: center;
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .welcome-box {
      background: rgba(255, 255, 255, 0.1);
      padding: 40px 60px;
      border-radius: 20px;
      box-shadow: 0 8px 32px 0 rgba(0,0,0,0.2);
      backdrop-filter: blur(8px);
      border: 1px solid rgba(255,255,255,0.2);
    }

    h1 {
      font-size: 3em;
      margin-bottom: 20px;
    }

    p {
      font-size: 1.2em;
      margin-bottom: 30px;
    }

    .btn {
      padding: 12px 25px;
      font-size: 1em;
      background-color: #ffffff;
      color: #00aaff;
      border: none;
      border-radius: 30px;
      cursor: pointer;
      transition: all 0.3s ease;
      text-decoration: none;
    }

    .btn:hover {
      background-color: #00aaff;
      color: white;
    }
  </style>
</head>
<body>
  <div class="welcome-box">
    <h1>Wele, <?php echo htmlspecialchars($name); ?>!</h1>
    <p>We’re glad to have you here. Enjoy your visit!</p>
    <a href="home.php" class="btn">Go to Homepage</a>
  </div>
</body>
</html>
