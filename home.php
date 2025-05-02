<?php
$name = "Guest"; // Optional: Replace this with session data or database value
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home - Welcome <?php echo htmlspecialchars($name); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: #f4f7fa;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      color: #333;
    }

    .container {
      text-align: center;
      background: white;
      padding: 50px 30px;
      border-radius: 16px;
      box-shadow: 0 8px 30px rgba(0,0,0,0.15);
      max-width: 500px;
      width: 90%;
    }

    h1 {
      color: #2c3e50;
      margin-bottom: 20px;
    }

    p {
      font-size: 1.1em;
      margin-bottom: 30px;
    }

    .btn {
      background-color: #2980b9;
      color: #fff;
      padding: 12px 25px;
      border: none;
      border-radius: 25px;
      font-size: 1em;
      text-decoration: none;
      transition: background 0.3s ease;
    }

    .btn:hover {
      background-color: #1f6396;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Welcome to the Home Page, <?php echo htmlspecialchars($name); ?>!</h1>
    <p>This is your dashboard or landing area. You can customize this page with more content, navigation, or tools.</p>
    <a href="welcome_improved.php" class="btn">Back to Welcome</a>
  </div>
</body>
</html>
