<?php
$name = "Guest"; // Change to session or user data if available

$hour = date('H');
$greeting = ($hour < 12) ? "Good morning" : (($hour < 18) ? "Good afternoon" : "Good evening");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Welcome <?php echo htmlspecialchars($name); ?>!</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to right, #74ebd5, #9face6);
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      color: #333;
    }

    .card {
      background: white;
      padding: 50px 30px;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
      text-align: center;
      max-width: 500px;
      width: 90%;
      animation: fadeIn 0.8s ease-in;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to   { opacity: 1; transform: translateY(0); }
    }

    h1 {
      margin-bottom: 15px;
      color: #2c3e50;
    }

    p {
      font-size: 1.1em;
      margin-bottom: 30px;
    }

    .btn {
      background-color: #2980b9;
      color: white;
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
  <div class="card">
    <h1><?php echo $greeting; ?>, <?php echo htmlspecialchars($name); ?>!</h1>
    <p>Welcome to the site. Click below to continue to your dashboard.</p>
    <a href="home.php" class="btn">Enter Site</a>
  </div>
</body>
</html>
