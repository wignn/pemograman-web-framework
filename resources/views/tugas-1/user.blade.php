<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Page</title>
  <style>
    body {
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      background: linear-gradient(135deg, #e0f7fa, #e1bee7);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .container {
      background: #fff;
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
      text-align: center;
      width: 100%;
      max-width: 400px;
    }

    .profile-img {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      border: 4px solid #007bff;
      margin-bottom: 20px;
    }

    .welcome-text {
      font-size: 20px;
      font-weight: 600;
      color: #333;
      margin-bottom: 30px;
    }

    .btn {
      display: inline-block;
      padding: 12px 24px;
      margin: 10px;
      font-size: 16px;
      font-weight: 500;
      border-radius: 12px;
      color: #fff;
      text-decoration: none;
      background: linear-gradient(135deg, #007bff, #00c6ff);
      box-shadow: 0 5px 15px rgba(0,123,255,0.3);
      transition: all 0.3s ease;
    }

    .btn:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 20px rgba(0,123,255,0.5);
      background: linear-gradient(135deg, #0056b3, #0097c1);
    }

    .btn-back {
      background: linear-gradient(135deg, #6c757d, #495057);
      box-shadow: 0 5px 15px rgba(108,117,125,0.3);
    }

    .btn-back:hover {
      background: linear-gradient(135deg, #495057, #343a40);
      box-shadow: 0 8px 20px rgba(73,80,87,0.5);
    }
  </style>
</head>
<body>
    <div class="container">
        <!-- Foto profil bisa diganti sesuai user -->
        <img src="{{ asset('images/user.jpg') }}" alt="Profile" class="profile-img">
        <p class="welcome-text">Selamat datang, {{ $name ?? 'User' }} 👋</p>

        <a href="{{route('menu')}}" class="btn">Profile</a>
        <a href="{{url()->previous()}}" class="btn btn-back">Back</a>
    </div>
</body>
</html>
