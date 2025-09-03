<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #e0f7fa, #e1bee7);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .menu-container {
      max-width: 600px;
      width: 100%;
      background: #ffffff;
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
      text-align: center;
    }

    .menu-title {
      color: #333;
      font-size: 28px;
      margin-bottom: 30px;
      font-weight: bold;
      letter-spacing: 1px;
    }

    .menu-link {
      display: inline-block;
      padding: 14px 28px;
      margin: 10px;
      background: linear-gradient(135deg, #007bff, #00c6ff);
      color: #fff;
      font-size: 16px;
      font-weight: 500;
      text-decoration: none;
      border-radius: 12px;
      transition: all 0.3s ease;
      box-shadow: 0 5px 15px rgba(0,123,255,0.3);
    }

    .menu-link:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 20px rgba(0,123,255,0.5);
      background: linear-gradient(135deg, #0056b3, #0097c1);
    }
  </style>
</head>
<body>
  <div class="menu-container">
    <p class="menu-title">Menu Utama</p>
    <a href="{{ route('user') }}" class="menu-link">User</a>
    <a href="#" class="menu-link">Dashboard</a>
    <a href="#" class="menu-link">Settings</a>
  </div>
</body>
</html>
